<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{


    public function index()
    {

        // $product = new Product(1, "<script>alert('Has executat JavaScript!')</script>", 30, "Periferics");
        $product = new Product(1, "Monitor", 30, "Periferics");
        $productInfo[] = $product->getAll();
        $product = new Product(2, "Keyboard", 45, "Periferics");
        $productInfo[] = $product->getAll();


        // require __DIR__ . "/../Views/products/index.view.php";

        $this->render(
            'prova/test',
            [
                'titol' => "Llista de productes",
                'productList' => $productInfo
            ]
        );
    }
}
