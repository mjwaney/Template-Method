<?php

namespace App\Classes;

class SwordUnit extends Soldier
{
	protected $name;

	public function setName(String $name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function attack()
	{
		$this->execute("swinging sword!");
	}

	public function defend()
	{
		$this->execute("raising shield!");
	}
}