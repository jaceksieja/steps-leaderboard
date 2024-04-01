<?php

namespace App\Application\RequestModel;

class IncreaseCounterRequest
{
    public function __construct(
        private string $uuid,
        private int $value
    ) {
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
