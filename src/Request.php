<?php

class Request
{
    function getQueryParameter($parameterName, $defaultValue=null)
    {
        $queryParameter = $defaultValue;
        if (isset($_GET[$parameterName])) {
            $queryParameter = $_GET[$parameterName];
        }

        return $queryParameter;
    }
}
