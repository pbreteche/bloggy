<?php
require_once 'Response.php';


class Blog
{
    function handleRequest(Request $request)
    {
        $response = new Response();
        $response->setContent('Hello world!');
        return $response;
    }
}
