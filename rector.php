<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);

    // A) attributes PHP 8.0
    $rectorConfig->sets([
        SymfonySetList::SYMFONY_52
    ]);

    // B) doctrine attributes?
//    $rectorConfig->sets([
//        DoctrineSetList::DOCTRINE_ORM_29
//    ]);

    // C) nested with PHP 8.1 - https://symfony.com/blog/new-in-symfony-5-4-nested-validation-attributes
    $rectorConfig->sets([
        SymfonySetList::SYMFONY_54
    ]);
};
