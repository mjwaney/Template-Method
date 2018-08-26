<?php

namespace App\Classes;

abstract class Soldier
{
	private $order;
	private $name = 'John Doe';

	public final function takeAction($order)
	{
		$this->$order = $order;

		if($order == 'Attack'){

			return	$this->attack();

		}elseif($order == 'Defend'){

			return $this->defend();

		}else{
			return $this->awaitOrders();
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

	public function awaitOrders()
	{
		return $this->execute("I don't understand");
	}
}