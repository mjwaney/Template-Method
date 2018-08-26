<?php

namespace Tests;

use App\Classes\SwordUnit;
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
 
}