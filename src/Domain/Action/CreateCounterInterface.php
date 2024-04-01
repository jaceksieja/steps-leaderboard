<?php

namespace App\Domain\Action;

use App\Domain\Action\Event\CounterCreated;

interface CreateCounterInterface
{
    public function __invoke(): CounterCreated;
}
