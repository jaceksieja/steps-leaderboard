<?php

namespace App\Tests\App\Domain\Action;

use App\Domain\Action\IncreaseCounter;
use App\Domain\Repository\CounterRepositoryInterface;
use App\Infrastructure\Entity\Counter;
use PHPUnit\Framework\TestCase;

class IncreaseCounterTest extends TestCase
{
    public function testIncrease(): void
    {
        $repository = $this->createMock(CounterRepositoryInterface::class);

        $counter = new Counter(120);

        (new IncreaseCounter($repository))($counter, 9);

        $this->assertEquals(129, $counter->getValue());
    }
}
