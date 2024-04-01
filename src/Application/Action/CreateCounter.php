<?php

namespace App\Application\Action;

use App\Application\ViewModel\Counter;
use App\Application\ViewModel\ViewModelInterface;

readonly class CreateCounter
{
    public function __construct(
        private \App\Domain\Action\CreateCounter $createCounter
    ) {
    }

    public function __invoke(): ?ViewModelInterface
    {
        try {
            $event = ($this->createCounter)();

            return new Counter(
                $event->getCounter()
            );

        } catch (\Throwable $exception) {
            //@todo add loggr

            throw $exception;
        }
    }
}
