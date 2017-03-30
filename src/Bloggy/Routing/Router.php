<?php
namespace Bloggy\Routing;

use Bloggy\HttpMessaging\Request;
use Bloggy\Routing\Exception\RouteNotFoundException;

class Router
{
    private $config;

    public function getActionConfiguration(Request $request)
    {
        $config = $this->loadConfig();
        $type = $request->getQueryParameter('type', 'page');
        if (!isset($config[$type])) {
            throw new RouteNotFoundException('Non route found for ' . $type);
        }
        $arguments = array();
        foreach($config[$type]['argumentNames'] as $argumentName) {
            $arguments[$argumentName] = $request->getQueryParameter($argumentName);
        }
        $actionConfiguration = new ActionConfiguration(
            $config[$type]['controllerClass'],
            $config[$type]['controllerMethod'],
            $arguments
        );
        return $actionConfiguration;
    }

    private function loadConfig()
    {
        if (!$this->config) {
            $this->config = include 'routing.config.php';
        }
        return $this->config;
    }
}
