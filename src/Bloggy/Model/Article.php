<?php

namespace Bloggy\Model;

class Article
{

    private $title;
    private $publishedAt;
    private $body;

    public function __construct($title, $publishedAt, $body)
    {
        $this->title = $title;
        $this->publishedAt = $publishedAt;
        $this->body = $body;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }
    public function getBody()
    {
        return $this->body;
    }
}
