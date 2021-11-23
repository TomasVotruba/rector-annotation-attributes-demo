<?php

declare(strict_types=1);

namespace App\ValueObject;

final class Talk
{
    // @todo not null
    public $title;

    // @todo all(not null, stirng)
    public $parts;
}