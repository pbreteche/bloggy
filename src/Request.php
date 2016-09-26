<?php

class Request
{
    private $getParameter;

    public function __construct()
    {
        $this->getParameter = $_GET;
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
