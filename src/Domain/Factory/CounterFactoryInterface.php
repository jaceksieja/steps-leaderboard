<?php

namespace App\Domain\Factory;

use App\Domain\Model\CounterInterface;

interface CounterFactoryInterface
{
    public function create(): CounterInterface;
}
