<?php

use App\Errors;

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
            $products = require ROOT.'storage/products_list.php';
            foreach ($products as $product){
                if ($product['id']==$output['id']){
                    require VIEWS.'product.php';
                    break;
                }
            }
        } else {
            $errors = new Errors();
            $errors -> errorsShow('404');
        }
    }
}
