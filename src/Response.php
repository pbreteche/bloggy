<?php

/**
 *
 */
class Response
{

    function send()
    {
        echo $this->content;
    }

    function setContent($content)
    {
        $this->content = $content;
    }
}
