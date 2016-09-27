<?php
namespace Bloggy\Controller;

use Bloggy\HttpMessaging\Response;
use Bloggy\Model\Page;

class PageController
{
    public function showAction($id)
    {
        $response = new Response();
        $page = new Page(
            'Ma nouvelle page',
            'Description de la page',
            'Lorem ipsum et patati et blablabla'
        );
        $response->setContent('<h1>' . $page->getTitle() . '</h1>');
        return $response;
    }
}
