<?php
set_include_path ( '../src' );
require_once('autoload.php');

use Bloggy\HttpMessaging\Request;
use Bloggy\Blog;


$request = Request::createFromGlobals();
$blog = new Blog();
$response = $blog->handleRequest($request);
$response->send();
