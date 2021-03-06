<?php

use App\Models\Products;

class BasketController
{
    public function index()
    {
        $request = $_GET;
        if(!isset($request['id'])){
            if(isset($_SESSION['basket'])){
                echo json_encode($_SESSION['basket']);
                return;
            }
            echo json_encode([]);
            return;
        }
        $product = new Products;
        $product = $product->find(['id'=>$request['id']]);
        $product +=['qty'=>'1']; 
        if(!isset($_SESSION['basket'])){
            $_SESSION['basket']=[];
        }
        foreach($_SESSION['basket'] as $key=>$position){
            if($_SESSION['basket'][$key]['id'] == $product['id']){
                $_SESSION['basket'][$key]['qty'] += 1;
                echo json_encode($_SESSION['basket']);
                return;
            }
        }
        array_push ($_SESSION['basket'],$product);
        echo json_encode($_SESSION['basket']);
        return;
    }
}
