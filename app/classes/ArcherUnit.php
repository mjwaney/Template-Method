<?php

namespace App\Classes;

class ArcherUnit extends Soldier
{
	public function attack()
	{
		return $this->execute("firing arrows");
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