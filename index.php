<?php

include_once __DIR__ . "/autoload.php";

use App\Controllers\ProductController;
use App\Controllers\CategoryController;




if (!isset($_GET['page'])) {
    $page = 'products';
    # code...
} else $page =$_GET['page'];

switch ($page) {

    case 'products':
        $product = new ProductController;
        $product->index();
        break;
    case 'categories':
        $category = new CategoryController;
        $category->index();
        break;

}
