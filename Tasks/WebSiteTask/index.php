<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\NewsFetcher;
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$apiKey = $_ENV['API_KEY'];

$fetcher = new NewsFetcher($apiKey);
$news = $fetcher->getTechnologyNews();

foreach ($news as $article) {
    echo "Заглавие: {$article->title}\n";
    echo "Източник: {$article->source}\n";
    echo "URL: {$article->url}\n";
    echo "-----------------------\n";
}

file_put_contents(
    'news.json',
    json_encode($news, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);