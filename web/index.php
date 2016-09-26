<?php
set_include_path ( '../src' );
require_once 'Blog.php';
require_once 'Request.php';

$request = Request::createFromGlobals();
$blog = new Blog();
$response = $blog->handleRequest($request);
$response->send();
