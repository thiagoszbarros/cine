<?php

declare(strict_types=1);

namespace App\Domain\Entities;

class MovieTheather {
    public private(set) string $uuid;
    public private(set) string $name;
    public private(set) int $capacity;
    public private(set) int $rows;
    public private(set) int $columns;

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }
}
