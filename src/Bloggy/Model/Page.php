<?php

namespace Bloggy\Model;

class Page extends Publication
{

    private $description;

    public function __construct($title, $description, $body)
    {
        $this->description = $description;
        parent::__construct($title, $body);
    }

    public function getDescription()
    {
        return $this->description;
    }
}
