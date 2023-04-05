<?php

declare(strict_types=1);

/*
 * This file is part of the MicroApi engine based on Symfony components.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

$header = <<<'EOF'
    This file is part of the MicroApi engine based on Symfony components.
    (c) Pavel Vasin <reiterus@yandex.ru>
    This source file is subject to the MIT license that is bundled
    with this source code in the file LICENSE.
    EOF;

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->in(__DIR__)
    ->name('*.php')
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@PhpCsFixer' => true,
        'declare_strict_types' => true,
        'header_comment' => ['header' => $header],
    ])
    ->setFinder($finder)
;

return $config;
