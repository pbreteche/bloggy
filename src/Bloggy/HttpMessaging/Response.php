<?php

namespace Bloggy\HttpMessaging;

/**
 *
 */
class Response
{
    private $content;

    public function send()
    {
        echo $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
