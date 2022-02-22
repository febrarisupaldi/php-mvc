<?php

namespace Paldi\PHP\MVC\Controller;

class ProductController{

    function categories(string $productId, string $categoryId) :void{
        echo "Product ". $productId . ", Category ". $categoryId;
    }

}