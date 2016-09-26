<?php
namespace Bloggy;

use Bloggy\HttpMessaging\Response;
use Bloggy\HttpMessaging\Request;

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
