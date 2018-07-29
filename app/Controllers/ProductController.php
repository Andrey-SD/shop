<?php

use Src\Errors;
use App\Models\Products;

class ProductController
{
    public function index($url)
    {
        if(isset($url['query'])){
            parse_str($url['query'],$output);
            if(!array_key_exists ( 'id', $output )){
                $errors = new Errors();
                $errors -> errorsShow('500');
            }
            $products = new Products;
            $product = $products->find(['id'=>$output['id']]);
            if(sizeof($product)<1){
                $errors = new Errors();
                $errors -> errorsShow('404');
            }
            require VIEWS.'product.php';
        }else{
            $errors = new Errors();
            $errors -> errorsShow('404');
        }
    }
}
