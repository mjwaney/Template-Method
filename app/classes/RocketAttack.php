<?php

namespace App\Classes;

use App\Classes\iAttack;

class RocketAttack implements iAttack
{
    public function attack()
    {
    	return "Firing Missiles!";
    }
}