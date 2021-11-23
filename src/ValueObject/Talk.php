<?php

declare(strict_types=1);

namespace App\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;

final class Talk
{
    /**
     * @Assert\NotNull
     */
    public $title;

    /**
     * @Assert\NotNull
     * @Assert\Count(min=1),
     */
    public $userCount;

    /**
     * @Assert\All({
     *   @Assert\NotNull(),
     *   @Assert\Count(min=2, max=4),
     * })
     * @see https://symfony.com/blog/new-in-symfony-5-2-php-8-attributes
     */
    public $parts;
}
