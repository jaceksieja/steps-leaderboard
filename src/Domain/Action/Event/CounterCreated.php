<?php

namespace App\Domain\Action\Event;

use App\Domain\Model\CounterInterface;

class CounterCreated implements EventInterface
{
    public function __construct(
        private readonly CounterInterface $counter
    ) {
    }

    public function getCounter(): CounterInterface
    {
        return $this->counter;
    }
}
