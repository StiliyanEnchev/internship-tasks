<?php

require 'bootstrap.php';
require 'src/Models/AuthorModel.php';
require 'src/Models/BookModel.php';

// adding authors and books //

$author1 = Author::create(['name' => 'George R. R. Martin']);
$author2 = Author::create(['name' => 'Stephen King']);

$author1->books()->createMany([
    ['title' => 'A Game of Thrones'],
    ['title' => 'A Clash of Kings'],
]);

$author2->books()->createMany([
    ['title' => 'The Shining'],
    ['title' => 'It'],
]);

// queries //

$authors = Author::all();
foreach ($authors as $author) {
    echo $author->name . PHP_EOL;
}

$found = Book::where('title', 'like', '%Game%')->get();

foreach ($found as $book) {
    echo $book->title . PHP_EOL;
}