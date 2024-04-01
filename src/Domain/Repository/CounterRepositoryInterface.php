<?php

namespace App\Domain\Repository;

use App\Domain\Model\CounterInterface;

interface CounterRepositoryInterface
{
    public function save(CounterInterface $counter): bool;
    public function find(string $uuid): CounterInterface;
}
