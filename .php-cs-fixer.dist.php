<?php

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        '@PhpCsFixer' => true,
        '@DoctrineAnnotation' => true,
        'concat_space' => ['spacing' => 'one'],

    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/src')
            ->in(__DIR__ . '/examples')
            ->in(__DIR__ . '/generators')
            ->in(__DIR__ . '/tests')
    );
