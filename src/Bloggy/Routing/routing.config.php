<?php

namespace Bloggy\Routing;

return array(
    'page' => array(
        'controllerClass' => 'Bloggy\\Controller\\PageController',
        'controllerMethod' => 'showAction',
        'argumentNames' => array('id'),
    )
);
