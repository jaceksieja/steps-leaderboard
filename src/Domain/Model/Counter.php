<?php

namespace App\Domain\Model;

class Counter
{
    public function __construct(
        private int $value
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function increase(int $value): bool
    {
        $this->value += $value;

        return true;
    }
}
