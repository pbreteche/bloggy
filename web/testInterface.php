<?php
require_once('../vendor/autoload.php');

use Bloggy\Store\Product;
use Bloggy\Output\HtmlGenerator;

$produit = new Product();
$hg = new HtmlGenerator();

$hg->addVariable($produit);
