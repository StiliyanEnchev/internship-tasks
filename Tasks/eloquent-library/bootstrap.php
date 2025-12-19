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


