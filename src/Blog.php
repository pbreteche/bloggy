<?php
require_once 'Response.php';


class Blog
{
    public function handleRequest(Request $request)
    {
        $name = $request->getQueryParameter('name', 'world');
        $response = new Response();
        $response->setContent('Hello ' . $name . '!');
        return $response;
    }
}
