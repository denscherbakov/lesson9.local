<?php

require_once __DIR__ . '/autoload.php';

$cache = new \App\TestCache();
$book = new \App\Book('King of the rings', 1000, 'Tolkien', 100);

$component = new \App\BookCacheDecorator($book, $cache);

echo $component->getBook(1) . '<br>';
echo $component->getBook(1) . '<br>';
echo $component->getBook(1) . '<br>';
echo $component->getBook(2) . '<br>';
echo $component->getBook(2) . '<br>';