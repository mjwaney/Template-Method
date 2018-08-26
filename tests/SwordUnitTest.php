<?php

namespace Tests;

use App\Classes\SwordUnit;
use App\Classes\Soldier;
use PHPUnit\Framework\TestCase;

class SwordUnitTest extends TestCase
{
    private $soldier;

    public function setUp()
    {
        $this->soldier = new SwordUnit();
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
        $this->assertEquals('John Doe: swinging sword!', $this->soldier->takeAction('Attack'));
        $this->assertEquals('John Doe: raising shield!', $this->soldier->takeAction('Defend'));
    }   
    
    /** @test */
    public function await_orders()
    {
        $this->assertEquals('John Doe: I don\'t understand', $this->soldier->takeAction('do something'));
    }   
 
}