<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/simple_html_dom.php',
    ])
    ->withSkip([
        __DIR__ . '/vendor',
    ])
    ->withSets([
        SetList::PHP_73
    ])
    ->withPhpVersion(PhpVersion::PHP_73);
