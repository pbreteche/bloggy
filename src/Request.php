<?php

class Request
{
    private $getParameter;

    public static function createFromGlobals()
    {
        return new self($_GET);
    }

    public function __construct($get)
    {
        $this->getParameter = $get;
    }

    public function getQueryParameter($parameterName, $defaultValue=null)
    {
        $queryParameter = $defaultValue;
        if (isset($this->getParameter[$parameterName])) {
            $queryParameter = $this->getParameter[$parameterName];
        }

        return $queryParameter;
    }
}
