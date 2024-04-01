<?php

namespace App\Domain\Action;

use App\Domain\Action\Event\CounterIncreased;
use App\Domain\Model\CounterInterface;

interface IncreaseCounterInterface
{
    public function __invoke(CounterInterface $counter, int $value): CounterIncreased;
}
