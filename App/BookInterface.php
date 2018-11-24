<?php

namespace App;

interface BookInterface
{
	/**
	 * @param int $key
	 * @return string
	 */
	public function getContent(int $key) : string;

	/**
	 * @return string
	 */
	public function getAuthor() : string;

	/**
	 * @return int
	 */
	public function getPagesCount() : int;
}