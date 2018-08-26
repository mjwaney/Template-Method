<?php

namespace App\Classes;

abstract class Soldier
{
	private $order;

	public final function takeAction($order)
	{
		$this->$order = $order;

		return $order;
	}
}