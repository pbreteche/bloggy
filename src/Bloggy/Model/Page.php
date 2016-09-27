<?php

namespace Bloggy\Model;

class Page
{

    private $title;
    private $description;
    private $body;

    public function __construct($title, $description, $body)
    {
        $this->title = $title;
        $this->description = $description;
        $this->body = $body;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getBody()
    {
        return $this->body;
    }
}
