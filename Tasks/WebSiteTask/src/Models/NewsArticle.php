<?php

namespace App\Models;

class NewsArticle
{
    public $title;
    public $source;
    public $url;

    public function __construct($title, $source, $url)
    {
        $this->title = $title;
        $this->source = $source;
        $this->url = $url;
    }
}
