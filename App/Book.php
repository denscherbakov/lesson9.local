<?php

namespace App;

class Book extends Good implements BookInterface
{
	protected $author;
	protected $pagesCount;

	/**
	 * @param string $name
	 * @param int $cost
	 * @param string $author
	 * @param int $pagesCount
	 */
	public function __construct(string $name, int $cost, string $author, int $pagesCount)
	{
		parent::__construct($name, $cost);

		$this->author = $author;
		$this->pagesCount = $pagesCount;
	}

	/**
	 * Получение содержимого книги.
	 * @param int $key
	 * @return string
	 */
	public function getContent(int $key) : string
	{
		return file_get_contents(__DIR__ . '/../library/book' . $key . '.txt');
	}

	/**
	 * @return string
	 */
	public function getAuthor(): string
	{
		return $this->author;
	}

	/**
	 * @return int
	 */
	public function getPagesCount(): int
	{
		return $this->pagesCount;
	}
}