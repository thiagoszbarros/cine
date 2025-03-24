<?php

declare(strict_types=1);

namespace App\Domain\Entities;

class Movie
{
    public private(set) string $uuid;
    public private(set) string $name;
    public private(set) int $seconds;

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }
}
