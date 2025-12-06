<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Models\NewsArticle;


class NewsFetcher
{
    private $apiKey;
    private Client $client;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client([
            'verify' => false
        ]);
    }

    public function getTechnologyNews()
    {
        $url = "https://newsapi.org/v2/top-headlines?category=technology&country=us&apiKey={$this->apiKey}";

        try {
            $response = $this->client->request('GET', $url, options: [
                "verify" => false
            ]);

            $data = json_decode($response->getBody(), true);
            $articles = [];

            foreach ($data['articles'] as $item) {
                $articles[] = new NewsArticle(
                    $item['title'] ?? 'No title',
                    $item['source']['name'] ?? 'Unknown',
                    $item['url'] ?? ''
                );
            }

            return $articles;
        } catch (GuzzleException) {
            echo "Възникна грешка при заявката към API.\n";
            return [];
        }
    }
}
