<?php
namespace Bloggy\Routing;

class ActionConfiguration
{
    private $controller;
    private $arguments;

    public function __construct($controllerClass, $controllerMethod, $arguments)
    {
        $this->controller = array(new $controllerClass(), $controllerMethod);
        $this->arguments = $arguments;
    }

    public function getController()
    {
        return $this->controller;
    }
    public function getArguments()
    {
        return $this->arguments;
    }
}
