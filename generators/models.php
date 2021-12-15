<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$swagger = json_decode(file_get_contents(__DIR__ . '/swagger.1.68.0.json'), true);

// Todo:
// Login::security,
// Document::service_date,
// Document::recurring_options,
// Document::customer_snapshot,
// Document::label_address,
// Document::address

foreach ($swagger['definitions'] as $className => $classInfo) {
    if (
        $className === 'List'
        || array_key_exists('allOf', $classInfo)
        || !array_key_exists('properties', $classInfo)
    ) {
        // List dont supported.
        continue;
    }


    $file = new Nette\PhpGenerator\PhpFile;
    $file->setStrictTypes();
    $class = $file->addClass('easybill\SDK\Models\\' . $className);

    $construct = $class->addMethod('__construct');
    $construct->addPromotedParameter('data', [])->setPublic();

    $errors = [];

    foreach ($classInfo['properties'] as $propertyName => $propertyInfo) {

        echo "==> " . $className . '::' . $propertyName . "\n";

        $type = match ($propertyInfo['type']) {
            'integer' => 'int',
            'number' => 'float',
            'boolean' => 'bool',
            default => $propertyInfo['type'],
        };

        $methodeName = str_replace('_', '', ucwords($propertyName, '_'));

        if (!($propertyInfo['readOnly'] ?? false)) {
            $setter = $class->addMethod('set' . $methodeName);
            if (trim($propertyInfo['description'] ?? '') !== '') {
                $setter->addComment($propertyInfo['description']);
            }
            $setter->setReturnType('void');
            $setter->setBody('$this->data[\'' . $propertyName . '\'] = $' . $propertyName . ';');

            $property = $setter->addParameter($propertyName);
            $property->setType($type);
            if ($propertyInfo['x-nullable'] ?? false) {
                $property->setNullable();
            }

        }


        $getter = $class->addMethod('get' . $methodeName);
        $getter->setReturnType($type);
        if ($propertyInfo['x-nullable'] ?? false) {
            $getter->setReturnNullable();
        }
        $getter->setBody('return $this->data[\'' . $propertyName . '\'];');

    }

    file_put_contents(__DIR__ . '/../src/Models/' . $className . '.php', $file);

}