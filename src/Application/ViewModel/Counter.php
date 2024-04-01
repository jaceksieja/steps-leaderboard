<?php

namespace App\Application\ViewModel;

use App\Domain\Model\CounterInterface;

readonly class Counter implements ViewModelInterface
{
    public function __construct(
        private CounterInterface $counter
    ) {
    }

    public function getValue(): int
    {
        return $this->counter->getValue();
    }
}
