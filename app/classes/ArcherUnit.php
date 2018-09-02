<?php

namespace App\Classes;
use App\Classes\ArcherAttack;

class ArcherUnit extends Soldier
{
	public function __construct()
	{
		$this->attack = new ArcherAttack;
	}

	public function defend()
	{
		return $this->execute("retreating");
	}

    public function awaitOrders()
    {
        return $this->execute("Wut!?");
    }
}