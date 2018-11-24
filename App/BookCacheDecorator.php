<?php

namespace App;

class BookCacheDecorator
{
	protected $book;
	protected $cache;

	/**
	 * @param BookInterface $book
	 * @param CacheInterface $cache
	 */
	public function __construct(BookInterface $book, CacheInterface $cache)
	{
		$this->book = $book;
		$this->cache = $cache;
	}

	/**
	 * Если в кэше есть контент книги - возвращаем его,
	 * иначе получаем контент из файла, кешируем и возвращаем контент.
	 * @param int $id
	 * @return string
	 */
	public function getBook(int $id)
	{
		if ($this->cache->hasByKey($id)){
			return $this->cache->getByKey($id) . ' From cache.';
		}

		$bookContent = $this->book->getContent($id);
		$this->cache->setByKey($id, $bookContent);
		return $bookContent;
	}
}