<?php

include_once __DIR__ . "/autoload.php";

use App\Controllers\ProductController;


$product = new ProductController;
$product->index();
