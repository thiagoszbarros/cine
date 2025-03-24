<?php

declare(strict_types=1);

namespace App\Domain\Entities;

class Seat {
    public private(set) string $uuid;
    public private(set) MovieTheather $movieTheather;
    public private(set) int $number;
    public private(set) int|string $row;
    public private(set) int $column;
    public private(set) bool $isReserved;

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }
}
