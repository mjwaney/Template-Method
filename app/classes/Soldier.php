<?php

namespace App\Classes;
use App\CLasses\iAttack; 

abstract class Soldier
{	
	private $order;
	private $name = 'John Doe';
	protected $attack;

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

	public function setAttackMethod(iAttack $attack){
		$this->attack = $attack;
	}

	public function attack()
	{
		return $this->execute($this->attack->attack());
	}

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