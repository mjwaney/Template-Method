<?php

namespace App\Classes;

class SwordUnit extends Soldier
{


	public function attack()
	{
		return $this->execute("swinging sword!");
	}

	public function defend()
	{
		return $this->execute("raising shield!");
	}
}