<?php

namespace App\Domain\Model;

interface CounterInterface
{
    public function getValue(): int;
    public function increase(int $value): bool;
}
