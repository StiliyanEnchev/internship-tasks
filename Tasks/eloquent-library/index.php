<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'   => 'sqlite',
    'database' => __DIR__ . '/database.sqlite',
    'prefix'   => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

// table creation //

Capsule::schema()->dropIfExists('books');
Capsule::schema()->dropIfExists('authors');

Capsule::schema()->create('authors', function ($table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});

Capsule::schema()->create('books', function ($table) {
    $table->id();
    $table->string('title');
    $table->foreignId('author_id')->constrained('authors');
    $table->timestamps();
});

// models //

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

class Book extends Model
{
    protected $fillable = ['title', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

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