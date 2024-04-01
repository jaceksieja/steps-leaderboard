<?php

namespace App\Infrastructure\Factory;

use App\Domain\Factory\CounterFactoryInterface;
use App\Domain\Model\CounterInterface;
use App\Infrastructure\Entity\Counter;

class CounterFactory implements CounterFactoryInterface
{
    #[\Override] public function create(): CounterInterface
    {
        return new Counter(0);
    }
}
