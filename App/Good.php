<?php

namespace App;

abstract class Good
{
	protected $name;
	protected $cost;

	/**
	 * @param string $name
	 * @param int $cost
	 */
	public function __construct(string $name, int $cost)
	{
		$this->name = $name;
		$this->cost = $cost;
	}

	/**
	 * @return int
	 */
	public function getCost() : int
	{
		return $this->cost;
	}

	/**
	 * @param int $cost
	 */
	public function setCost(int $cost)
	{
		$this->cost = $cost;
	}
}