<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig): void {
    // Define paths to analyze
    $rectorConfig->paths([
        __DIR__ . '/simple_html_dom.php',
    ]);

    // Skip files/directories you don't want to analyze
    $rectorConfig->skip([
        __DIR__ . '/vendor',
    ]);

    // Use PHP 7.3 upgrade rules
    $rectorConfig->sets([
        SetList::PHP_73
    ]);

    // Optional: Set PHP version for better analysis
    $rectorConfig->phpVersion(PhpVersion::PHP_73);
};
