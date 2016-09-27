<?php
require_once('../vendor/autoload.php');

use Bloggy\HttpMessaging\Request;
use Bloggy\Blog;


$request = Request::createFromGlobals();
$blog = new Blog();
$response = $blog->handleRequest($request);
$response->send();
