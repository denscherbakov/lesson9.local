<?php

namespace App;

interface CacheInterface
{
	/**
	 * @param int $key
	 */
	public function getByKey(int $key);

	/**
	 * @param int $key
	 * @param string $value
	 */
	public function setByKey(int $key, string $value);

	/**
	 * @param int $key
	 * @return bool
	 */
	public function hasByKey(int $key) : bool;
}