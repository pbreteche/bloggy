<?php
set_include_path ( '../src' );

use Bloggy\HttpMessaging\Request;
use Bloggy\Blog;

require_once 'Blog.php';
require_once 'Request.php';

$request = Request::createFromGlobals();
$blog = new Blog();
$response = $blog->handleRequest($request);
$response->send();
