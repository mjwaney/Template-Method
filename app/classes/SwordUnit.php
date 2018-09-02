<?php

namespace App\Classes;
use App\Classes\SwordAttack;

class SwordUnit extends Soldier
{
	public function __construct()
	{
		$this->attack = new SwordAttack;
	}

	public function defend()
	{
		return $this->execute("raising shield!");
	}
}