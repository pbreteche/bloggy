<?php

namespace Bloggy\Model;

class Article extends Publication
{
    private $publishedAt;

    public function __construct($title, $publishedAt, $body)
    {
        $this->publishedAt = $publishedAt;
        parent::__construct($title, $body);
    }

    public function getPublishedAt()
    {
        return $this->publishedAt;
    }
}
