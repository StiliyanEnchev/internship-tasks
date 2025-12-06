<?php

namespace App\Models;

class NewsArticle
{
    public $title;
    public $source;
    public $url;
    public $urlToImage;

    public function __construct($title, $source, $url, $urlToImage = null)
    {
        $this->title = $title;
        $this->source = $source;
        $this->url = $url;
        $this->urlToImage  = $urlToImage;
    }
}
