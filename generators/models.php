<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$swagger = json_decode(file_get_contents(__DIR__ . '/swagger.1.68.0.json'), true);

function classNameFromRef(string $ref): string
{
    $explodedRef = explode('/', $ref);
    $className = end($explodedRef);
    return $className === 'List' ? 'ResultList' : $className;
}

function classWithNamespace(string $className): string
{
    $namespace = str_contains($className, 'ResultList') ? 'easybill\SDK\ResultLists\\' : 'easybill\SDK\Models\\';
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
        'object' => \stdClass::class,
        '' => '',
        default => throw new RuntimeException('type not supported: ' . $type),
    };
}

foreach ($swagger['definitions'] as $className => $classInfo) {
    $className = $className === 'List' ? 'ResultList' : $className;
    $classInfo['properties'] = $classInfo['properties'] ?? [];
    $classInfo['allOf'] = $classInfo['allOf'] ?? [];
    $classInfo['description'] = trim($classInfo['description'] ?? '');
    $classExtends = [];

    foreach ($classInfo['allOf'] as $of) {
        if (array_key_exists('$ref', $of)) {
            $classExtends[] = classWithNamespace(classNameFromRef($of['$ref']));
            continue;
        }
        if (array_key_exists('properties', $of)) {
            $classInfo['properties'] = array_merge($classInfo['properties'], $of['properties']);
            continue;
        }
    }

    if (
        str_contains($className, 'ResultList')
        || in_array(classWithNamespace('ResultList'), $classExtends, true)
        || $className === 'PDFTemplates'
    ) {
        // dont support this in first step;
        continue;
    }

    $file = new Nette\PhpGenerator\PhpFile();
    $file->setStrictTypes();
    $class = $file->addClass(classWithNamespace($className));
    $class->addComment('Auto-generated with `composer sdk:models`');
    $class->setExtends($classExtends);

    if ($classInfo['description'] !== '') {
        $class->addComment($classInfo['description']);
    }

    $construct = $class->addMethod('__construct');
    $construct->addPromotedParameter('data', [])->setProtected();
    if ($classExtends) {
        $construct->setBody('parent::__construct($data);');
    }

    $getterData = $class->addMethod('getData');
    $getterData->setReturnType('array');
    $getterData->setBody('return $this->data;');

    $errors = [];

    foreach ($classInfo['properties'] as $propertyName => $propertyInfo) {
        $propertyInfo['readOnly'] = $propertyInfo['readOnly'] ?? false;
        $propertyInfo['description'] = trim($propertyInfo['description'] ?? '');
        $propertyInfo['type'] = trim($propertyInfo['type'] ?? '');
        $propertyInfo['x-nullable'] = $propertyInfo['x-nullable'] ?? false;
        $propertyInfo['items'] = $propertyInfo['items'] ?? [];

        echo '==> ' . $className . '::' . $propertyName . "\n";

        $type = typeMap($propertyInfo['type']);

        if (array_key_exists('$ref', $propertyInfo)) {
            $type = classWithNamespace(classNameFromRef($propertyInfo['$ref']));
        }

        $methodeName = str_replace('_', '', ucwords($propertyName, '_'));

        if ($propertyInfo['readOnly'] === false) {
            $setter = $class->addMethod('set' . $methodeName);
            if ($propertyInfo['description'] !== '') {
                $setter->addComment($propertyInfo['description']);
            }
            $setter->setReturnType('void');
            $setter->setBody('$this->data[\'' . $propertyName . '\'] = $' . $propertyName . ';');

            $property = $setter->addParameter($propertyName);
            $property->setType($type);
            if ($propertyInfo['x-nullable']) {
                $property->setNullable();
            }
        }

        $getter = $class->addMethod('get' . $methodeName);
        $getter->setReturnType($type);
        if ($propertyInfo['x-nullable']) {
            $getter->setReturnNullable();
        }
        if ($type === 'array' && array_key_exists('type', $propertyInfo['items'])) {
            $getter->addComment('@return ' . typeMap($propertyInfo['items']['type']) . '[]');
        }
        if ($type === 'array' && array_key_exists('$ref', $propertyInfo['items'])) {
            $getter->addComment('@return \\' . classWithNamespace(classNameFromRef($propertyInfo['items']['$ref'])) . '[]');
        }
        $getter->setBody('return $this->data[\'' . $propertyName . '\'];');
    }

    $content = (new Nette\PhpGenerator\PsrPrinter())->printFile($file);
    file_put_contents(__DIR__ . '/../src/Models/' . $className . '.php', $content);
}
