<?php

namespace Bloggy\Routing;

return array(
    'page' => array(
        'controllerClass' => 'Bloggy\\Controller\\PageController',
        'controllerMethod' => 'showAction',
        'argumentNames' => array('id'),
    ),
    'page2' => array(
        'controllerClass' => 'Bloggy\\Controller\\PageController',
        'controllerMethod' => 'filterListAction',
        'argumentNames' => array('color', 'size'),
    )
);
