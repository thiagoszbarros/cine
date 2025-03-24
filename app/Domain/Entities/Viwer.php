<?php

declare(strict_types=1);

namespace App\Domain\Entities;

class Viwer {
    public private(set) string $uuid;
    public private(set) string $name;
    public private(set) string $documentNumber;

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }
}
