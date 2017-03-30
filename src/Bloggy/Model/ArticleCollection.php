<?php

namespace Bloggy\Model;

class ArticleCollection implements Iterator
{
    private $position;
    private $articles;

    public function __construct()
    {
        $this->position = 0;
        $this->articles = array();
    }

    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
    }

    public function next()
    {
        $this->position++;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->articles[$this->position]);
    }

    public function current()
    {
        return $this->articles[$this->position];
    }

    public function key()
    {
        return $this->position;
    }
}
