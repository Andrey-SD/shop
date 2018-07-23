<?php

use Models\Products;

class BasketController
{
    public function index()
    {
        $request = $_GET;
        $product = new Products;
        $product = $product->find(['id'=>$request['id']]);
        echo json_encode($product);
        $_SESSION['basket'][(sizeof($_SESSION['basket']))+1]=$product;
        if(!isset($_SESSION['basket'])){
            $_SESSION['basket']=[];
        }
        array_push ($_SESSION['basket'],$product);
    }
}
