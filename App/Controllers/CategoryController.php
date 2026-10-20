<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Models\Category;

class CategoryController extends BaseController
{


    public function index()
    {

        $cat = new Category(1, "Monitors");
        $catInfo[] = $cat->getAll();
        $cat = new Category(2, "Periferics");
        $catInfo[] = $cat->getAll();


        // require __DIR__ . "/../Views/products/index.view.php";

        $this->render(
            'categories/index',
            [
                'titol' => "Llista de categories",
                'categoryList'=> $catInfo
            ]
        );
    }
}
