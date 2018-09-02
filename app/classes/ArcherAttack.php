<?php

namespace App\Classes;

use App\Classes\iAttack;

class ArcherAttack implements iAttack
{
    public function attack()
    {
    	return "firing arrows";
    }
}