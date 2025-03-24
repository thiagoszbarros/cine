<?php

declare(strict_types=1);

namespace App\Domain\Entities;

class Ticket {
    public private(set) string $uuid;
    public private(set) Session $session;
    public private(set) Seat $seat;
    public private(set) Viwer $viewer;
    public private(set) float $price;
    public private(set) bool $isDiscounted;
    public private(set) bool $isSold;
    public private(set) bool $isCancelled;
    public private(set) bool $isRefunded;
    public private(set) bool $isUsed;

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }
}
