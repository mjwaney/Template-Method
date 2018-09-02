<?php

namespace Tests;

use App\Classes\Soldier_Stub;
use PHPUnit\Framework\TestCase;

class SoldierStubUnitTest extends TestCase
{
    public function test_stub()
    {
        $soldierStub = $this->createMock(Soldier_Stub::class);

        $soldierStub->expects($this->any())
            ->method('getName')
            ->will($this->returnValue('Jesse'));

        $soldierStub->method('attack')
            ->willReturn('Attacking');

        $soldierStub->method('defend')
            ->willReturn('Defending');

        $soldierStub->method('execute')
            ->with('attack')
            ->willReturn('John: attack');

        $soldierStub->method('awaitOrders')
            ->willReturn('John: I don\'t understand');

        $this->assertEquals('Jesse', $soldierStub->getName());

        $this->assertEquals('Attacking', $soldierStub->attack());

        $this->assertEquals('Defending', $soldierStub->defend());

        $this->assertEquals('John: I don\'t understand', $soldierStub->awaitOrders());

    }

}