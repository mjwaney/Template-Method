<?php

namespace Tests;

use App\Classes\ArcherUnit;
use App\Classes\Soldier;
use PHPUnit\Framework\TestCase;

class ArcherUnitTest extends TestCase
{
    private $soldier;

    public function setUp()
    {
        $this->soldier = new ArcherUnit();
    }
    
    /** @test */
    public function set_name()
    {
        $this->soldier->setName('Jack');
        $this->assertEquals('Jack', $this->soldier->getName());
    }
    
    /** @test */
    public function take_action()
    {
        $this->assertEquals('John Doe: firing arrows', $this->soldier->takeAction('Attack'));
        $this->assertEquals('John Doe: retreating', $this->soldier->takeAction('Defend'));
    } 
    
    /** @test */
    public function await_orders()
    {
        $this->assertEquals('John Doe: Wut!?', $this->soldier->takeAction('do something'));
    }   

}