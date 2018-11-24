<?php

namespace App;

class TestCache implements CacheInterface
{
	private $cache = [];

	/**
	 * @param int $key
	 * @return mixed|null
	 */
	public function getByKey(int $key)
	{
		return isset($this->cache[$key]) ? $this->cache[$key] : null;
	}

	/**
	 * @param int $key
	 * @param string $value
	 */
	public function setByKey(int $key, string $value)
	{
		$this->cache[$key] = $value;
	}

	/**
	 * @param int $key
	 * @return bool
	 */
	public function hasByKey(int $key): bool
	{
		return isset($this->cache[$key]);
	}
}