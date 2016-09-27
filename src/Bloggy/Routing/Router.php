<?php
namespace Bloggy\Routing;

use Bloggy\HttpMessaging\Request;

class Router
{
    private $config;

    public function getActionConfiguration(Request $request)
    {
        $config = $this->loadConfig();
        $type = $request->getQueryParameter('type', 'page');
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
