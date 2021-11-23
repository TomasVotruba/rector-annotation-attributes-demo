<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [
        __DIR__ . '/src'
    ]);

    // first
    $containerConfigurator->import(\Rector\Symfony\Set\SymfonySetList::SYMFONY_52);

    // then nested
    // $containerConfigurator->import(\Rector\Symfony\Set\SymfonySetList::SYMFONY_54);
};
