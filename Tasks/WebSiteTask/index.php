

<?php

require 'vendor/autoload.php';

use App\Services\NewsFetcher;
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$apiKey = $_ENV['API_KEY'];

$fetcher = new NewsFetcher($apiKey);
$news = $fetcher->getTechnologyNews();

file_put_contents(
    'news.json',
    json_encode($news, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

include __DIR__ . '/views/news.php';
