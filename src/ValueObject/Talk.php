<?php

declare(strict_types=1);

namespace App\ValueObject;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

final class Talk
{
    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull
     */
    public $title;

    /**
     * @ORM\Column(type="int")
     * @Assert\NotNull
     * @Assert\Count(min=1),
     */
    public $userCount;

    /**
     * @Assert\All({
     *   @Assert\NotNull(),
     *   @Assert\Count(min=2, max=4),
     * })
     */
    public $parts;
}
