<?php

namespace App\Infrastructure\Repository;

use App\Domain\Model\CounterInterface;
use App\Domain\Repository\CounterRepositoryInterface;
use App\Infrastructure\Entity\Counter;

class NullCounterRepository implements CounterRepositoryInterface
{
    #[\Override] public function save(CounterInterface $counter): bool
    {
        return true;
    }

    #[\Override] public function find(string $uuid): CounterInterface
    {
        return new Counter(1);
    }
}
