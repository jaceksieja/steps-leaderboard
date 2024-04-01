<?php

namespace App\Domain\Action;

use App\Domain\Action\Event\CounterCreated;
use App\Domain\Factory\CounterFactoryInterface;
use App\Domain\Repository\CounterRepositoryInterface;

readonly class CreateCounter implements CreateCounterInterface
{
    public function __construct(
        private CounterRepositoryInterface $repository,
        private CounterFactoryInterface $factory,
    ) {
    }

    public function __invoke(): CounterCreated
    {
        $counter = $this->factory->create();

        $this->repository->save($counter);

        return new CounterCreated($counter);
    }
}
