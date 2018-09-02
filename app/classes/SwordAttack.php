<?php

namespace App\Classes;

use App\Classes\iAttack;

class SwordAttack implements iAttack
{
    public function attack()
    {
    	return "swinging sword!";
    }
}