<?php

namespace Bloggy\Model;

class Publication
{

    private $title;
    private $body;

    public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function getTitle()
    {
        return $this->title;
    }
    
    public function getBody()
    {
        return $this->body;
    }
}
