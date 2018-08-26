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
        $this->assertEquals('swinging sword!', $this->soldier->takeAction('Attack'));
        $this->assertEquals('raising shield!', $this->soldier->takeAction('Defend'));
    }
    
 
}