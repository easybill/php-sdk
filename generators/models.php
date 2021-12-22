<?php

declare(strict_types=1);

use Easybill\SDK\Models\ToArrayInterface;
use Easybill\SDK\Models\Traits\Data;

require_once __DIR__ . '/../vendor/autoload.php';

$swagger = json_decode(file_get_contents(__DIR__ . '/swagger.json'), true);

function classNameFromRef(string $ref): string
{
    $explodedRef = explode('/', $ref);
    $className = end($explodedRef);

    return 'List' === $className ? 'ResultList' : $className;
}

function classWithNamespace(string $className): string
{
    $namespace = str_contains($className, 'ResultList') ? 'Easybill\SDK\ResultLists\\' : 'Easybill\SDK\Models\\';

    return $namespace . $className;
}

function typeMap(string $type): string
{
    return match ($type) {
        'integer' => 'int',
        'number' => 'float',
        'boolean' => 'bool',
        'array' => 'array',
        'string' => 'string',
        '' => '',
        default => throw new RuntimeException('type not supported: ' . $type),
    };
}

foreach ($swagger['definitions'] as $className => $classInfo) {
    $className = 'List' === $className ? 'ResultList' : $className;

    if (
        'ResultList' === $className
        || 'PDFTemplates' === $className
        || 'Discount' === $className
        || ($classInfo['allOf'][0]['$ref'] ?? '') === '#/definitions/List'
    ) {
        // dont support this in first step;
        continue;
    }

    $classInfo['properties'] = $classInfo['properties'] ?? [];
    $classInfo['allOf'] = $classInfo['allOf'] ?? [];
    $classInfo['description'] = trim($classInfo['description'] ?? '');
    $classInfo['readOnly'] = $classInfo['readOnly'] ?? false;

    foreach ($classInfo['allOf'] as $of) {
        if (array_key_exists('$ref', $of)) {
            $classInfo['properties'] = array_merge($classInfo['properties'], $swagger['definitions'][classNameFromRef($of['$ref'])]['properties'] ?? []);

            continue;
        }
        if (array_key_exists('properties', $of)) {
            $classInfo['properties'] = array_merge($classInfo['properties'], $of['properties']);

            continue;
        }
    }

    $file = new Nette\PhpGenerator\PhpFile();
    $file->setStrictTypes();
    $class = $file->addClass(classWithNamespace($className));
    $class->addComment('Auto-generated with `composer sdk:models`');
    $class->addComment('@version swagger ' . $swagger['info']['version']);
    $class->addComment('@version rest v1');

    if ('' !== $classInfo['description']) {
        $class->addComment($classInfo['description']);
    }

    $construct = $class->addMethod('__construct');
    $construct->addParameter('data', [])->setType('array');
    $class->addImplement(ToArrayInterface::class);
    $class->addTrait(Data::class);
    $construct->setBody('$this->data = $data;');

    $errors = [];

    foreach ($classInfo['properties'] as $propertyName => $propertyInfo) {
        $propertyInfo['readOnly'] = $propertyInfo['readOnly'] ?? false;
        $propertyInfo['description'] = trim($propertyInfo['description'] ?? '');
        $propertyInfo['type'] = trim($propertyInfo['type'] ?? '');
        $propertyInfo['x-nullable'] = $propertyInfo['x-nullable'] ?? false;
        $propertyInfo['items'] = $propertyInfo['items'] ?? [];
        $propertyInfo['format'] = $propertyInfo['format'] ?? '';
        $propertyInfo['enum'] = $propertyInfo['enum'] ?? [];

        echo '==> ' . $className . '::' . $propertyName . "\n";

        $type = typeMap($propertyInfo['type']);
        $isObject = false;

        if (array_key_exists('$ref', $propertyInfo)) {
            $type = classWithNamespace(classNameFromRef($propertyInfo['$ref']));
            $propertyInfo['readOnly'] = $swagger['definitions'][classNameFromRef($propertyInfo['$ref'])]['readOnly'] ?? false;
            $isObject = true;
        }

        if (
            'date' === $propertyInfo['format']
            || 'date-time' === $propertyInfo['format']
        ) {
            $type = DateTimeImmutable::class;
        }

        $methodeName = str_replace('_', '', ucwords($propertyName, '_'));

        if (false === $classInfo['readOnly'] && false === $propertyInfo['readOnly']) {
            $setter = $class->addMethod('set' . $methodeName);
            if ('' !== $propertyInfo['description']) {
                $setter->addComment($propertyInfo['description']);
            }
            $setter->setReturnType('void');
            $setter->setBody('$this->data[\'' . $propertyName . '\'] = $' . $propertyName . ';');

            $property = $setter->addParameter($propertyName);
            $property->setType($type);
            if ($propertyInfo['x-nullable']) {
                $property->setNullable();
            }
            if ('array' === $type && array_key_exists('$ref', $propertyInfo['items'])) {
                $setter->addComment('@param ' . classNameFromRef($propertyInfo['items']['$ref']) . '[] $' . $propertyName);
            }
            if ($propertyInfo['enum']) {
                $setter->addComment('@enum ' . json_encode($propertyInfo['enum'], JSON_THROW_ON_ERROR));
            }
        }

        $getter = $class->addMethod('get' . $methodeName);
        $getter->setReturnType($type);
        if ($propertyInfo['x-nullable']) {
            $getter->setReturnNullable();
        }
        if ('array' === $type && array_key_exists('type', $propertyInfo['items'])) {
            $getter->addComment('@return ' . typeMap($propertyInfo['items']['type']) . '[]');
        }
        if ('array' === $type && array_key_exists('$ref', $propertyInfo['items'])) {
            $getter->addComment('@return ' . classNameFromRef($propertyInfo['items']['$ref']) . '[]');
        }
        if ($isObject) {
            $getter->setBody('return $this->attrInstance(\'' . $propertyName . '\', \\' . $type . '::class);');
        } elseif ('date' === $propertyInfo['format']) {
            $getter->setBody('return $this->attrDate(\'' . $propertyName . '\');');
        } elseif ('date-time' === $propertyInfo['format']) {
            $getter->setBody('return $this->attrDateTime(\'' . $propertyName . '\');');
        } elseif ('array' === $type && array_key_exists('$ref', $propertyInfo['items'])) {
            $getter->setBody('return $this->attrInstances(\'' . $propertyName . '\', ' . classNameFromRef($propertyInfo['items']['$ref']) . '::class);');
        } else {
            $getter->setBody('return $this->attr(\'' . $propertyName . '\');');
        }
        if ($propertyInfo['enum']) {
            $getter->addComment('@enum ' . json_encode($propertyInfo['enum'], JSON_THROW_ON_ERROR));
        }
    }

    $content = (new Nette\PhpGenerator\PsrPrinter())->printFile($file);
    file_put_contents(__DIR__ . '/../src/Models/' . $className . '.php', $content);
}
