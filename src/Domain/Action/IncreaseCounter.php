<?php

namespace App\Domain\Action;

use App\Domain\Action\Event\CounterIncreased;
use App\Domain\Model\CounterInterface;
use App\Domain\Repository\CounterRepositoryInterface;

readonly class IncreaseCounter implements IncreaseCounterInterface
{
    public function __construct(
        private CounterRepositoryInterface $repository
    ) {
    }

    public function __invoke(CounterInterface $counter, int $value): CounterIncreased
    {
        $counter->increase($value);
        $this->repository->save($counter);

        return new CounterIncreased($counter);
    }
}
