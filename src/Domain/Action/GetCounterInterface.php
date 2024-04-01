<?php

namespace App\Domain\Action;

use App\Domain\Model\CounterInterface;

interface GetCounterInterface
{
    public function __invoke(string $uuid): CounterInterface;
}
