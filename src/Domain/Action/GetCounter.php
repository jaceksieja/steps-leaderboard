<?php

namespace App\Domain\Action;

use App\Domain\Model\CounterInterface;
use App\Domain\Repository\CounterRepositoryInterface;

readonly class GetCounter implements GetCounterInterface
{
    public function __construct(
        private CounterRepositoryInterface $repository,
    ) {
    }

    public function __invoke(string $uuid): CounterInterface
    {
        return $this->repository->find($uuid);
    }
}
