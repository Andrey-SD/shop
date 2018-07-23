<?php

use Models\Products;

class MainController
{
    public function index()
    {
        $products = new Products;
        $products = $products->find();
        include VIEWS.'main.php';
    }
}
