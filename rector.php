<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Doctrine\Set\DoctrineSetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Rector\Symfony\Set\SymfonySetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [
        __DIR__ . '/src'
    ]);

    // A) attributes PHP 8.0
    $containerConfigurator->import(SymfonySetList::SYMFONY_52);

    // B) doctrine attributes?
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_ORM_29);

    // C) nested with PHP 8.1 - https://symfony.com/blog/new-in-symfony-5-4-nested-validation-attributes
    $containerConfigurator->import(SymfonySetList::SYMFONY_54);

    $parameters->set(Option::PHP_VERSION_FEATURES, \Rector\Core\ValueObject\PhpVersionFeature::NEW_INITIALIZERS);
};
