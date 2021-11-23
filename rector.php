<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
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

    // B) nested with PHP 8.1 - https://symfony.com/blog/new-in-symfony-5-4-nested-validation-attributes
    $containerConfigurator->import(SymfonySetList::SYMFONY_54);
};
