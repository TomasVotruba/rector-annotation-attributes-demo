<?php

declare(strict_types=1);

namespace App\ValueObject;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

final class Talk
{
    #[Assert\NotNull]
    #[ORM\Column(type: 'string')]
    public $title;

    #[Assert\NotNull]
    #[ORM\Column(type: 'int')]
    public $userCount;

    #[Assert\All(options: [new Assert\NotNull(), new Assert\Count(min: 2, max: 4)])]
    public $parts;
}
