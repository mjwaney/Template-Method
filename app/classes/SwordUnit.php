<?php

namespace App\Classes;

class SwordUnit
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
}