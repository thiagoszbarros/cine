<?php

declare(strict_types=1);

namespace App\Domain\Entities;

class Session {
    public private(set) string $uuid;
    public private(set) Movie $movie;
    public private(set) MovieTheather $movieTheather;
    public private(set) \DateTime $date;

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }
}
