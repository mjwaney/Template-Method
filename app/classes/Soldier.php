<?php

namespace App\Classes;

abstract class Soldier
{
	private $order;
	protected $name = 'John Doe';

	public final function takeAction($order)
	{
		$this->$order = $order;

		if($order == 'Attack'){

			return	$this->attack();

		}elseif($order == 'Defend'){
			return $this->defend();

		}
	}

	public function setName(String $name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public abstract function attack();
	public abstract function defend();

	public function execute($action = "")
	{
		return "$this->name: $action";
	}
}