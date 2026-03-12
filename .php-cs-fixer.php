<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/tests')
    ->in(__DIR__ . '/src')
    ->append([__FILE__]);

$rules = [
    '@Symfony' => true,
    'phpdoc_no_empty_return' => false,
    'array_syntax' => ['syntax' => 'short'],
    'yoda_style' => false,
    'binary_operator_spaces' => [
        'operators' => [
            '=>' => 'align',
            '=' => 'align',
        ],
    ],
    'concat_space' => ['spacing' => 'one'],
    'not_operator_with_space' => false,
    'increment_style' => ['style' => 'post'],
];

return (new PhpCsFixer\Config())
    ->setUsingCache(true)
    ->setRules($rules)
    ->setFinder($finder);
