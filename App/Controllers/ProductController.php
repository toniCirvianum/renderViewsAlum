<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class ProductController
{


    public function index()
    {

        $product = new Product(1, "Mouse", 30, "Periferics");
        $productInfo[] = $product->getAll();
        $product = new Product(2, "Keyboard", 45, "Periferics");
        $productInfo[] = $product->getAll();


        require __DIR__ . "/../Views/products/index.view.php";
    }
}
