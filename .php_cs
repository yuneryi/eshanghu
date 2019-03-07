<?php

$header = <<<EOF
This file is part of the eshanghu-pay.

(c) XiaoTeng <616896861@qq.com>
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'header_comment' => ['header' => $header],
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => [
            'sort_algorithm' => 'length',
        ],
        'no_useless_else' => true,
        'no_useless_return' => true,
        'yoda_style' => false,
        'not_operator_with_successor_space' => true,
        'increment_style' => ['style' => 'post'],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/src')
    );