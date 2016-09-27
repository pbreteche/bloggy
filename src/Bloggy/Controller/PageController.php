<?php
namespace Bloggy\Controller;

use Bloggy\HttpMessaging\Response;

class PageController
{
    public function showAction($id)
    {
        $response = new Response();
        $response->setContent('Ceci est une page avec pour identifiant: ' . $id);
        return $response;
    }
}
