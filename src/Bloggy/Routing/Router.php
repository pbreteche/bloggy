<?php
namespace Bloggy\Routing;

use Bloggy\HttpMessaging\Request;

class Router
{
    public function getActionConfiguration(Request $request)
    {
        $actionConfiguration = new ActionConfiguration(
            'Bloggy\\Controller\\PageController',
            'showAction',
            array('id' => 3)
        );
        return $actionConfiguration;
    }
}
