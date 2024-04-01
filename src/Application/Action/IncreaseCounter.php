<?php

namespace App\Application\Action;

use App\Application\RequestModel\IncreaseCounterRequest;
use App\Application\ViewModel\Counter;
use App\Application\ViewModel\ViewModelInterface;
use App\Domain\Action\GetCounter;

readonly class IncreaseCounter
{
    public function __construct(
        private \App\Domain\Action\IncreaseCounter $increaseCounter,
        private GetCounter $getCounter,
    ) {
    }

    public function __invoke(IncreaseCounterRequest $request): ViewModelInterface
    {
        try {

            $counter = ($this->getCounter)($request->getUuid());

            ($this->increaseCounter)($counter, $request->getValue());

            return new Counter(
                $counter
            );

        } catch (\Throwable $exception) {
            //@todo add loggr

            throw $exception;
        }
    }
}
