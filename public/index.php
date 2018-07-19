<?php

use App\Route;
use Models\Users;
//use Src\Validation;

require_once dirname( __DIR__).'/app/Init.php';
Init::start();
//Route::routing();
$post = ['name' => 'ыыы',
    'email' => 'ы',
    'password' => '12345',
    're_password' => '12345'];
$rules = [
    'name'=>'required|maximum:64|minimum:6|unique|charnum|injection',
    'email'=>'required|minimum:6|unique|email|injection',
    'password' => 'required',
    're_password' => 'required|repeat:password'
];

run($post, $rules);
    function run($post, $rules){
        $arg=null;
        foreach ($rules as $field => $rule) {
            $explode = explode('|', $rule);
            foreach ($explode as $action) {
                $explode_action[1] = null;
                $explode_action = explode(':', $action);
                $function = $explode_action[0];
                if(isset($explode_action[1])){
                    $arg = $explode_action[1];
                }
                $result = $function($post[$field],$arg);
                if($result){
                   echo $field.' '.$result.'<br>';
                }
            }
        }
    }


    function required($value){
        if(empty($value)){
            return 'Поле не может быть пустым';
        }
    }

     function maximum($value, $arg){
         if (strlen($value) > $arg){
             return 'Поле не может быть больше '.$arg.' символов';
         }
    }

     function minimum($value,$arg){
         if (strlen($value) < $arg){
             return 'Поле не может быть меньше '.$arg.' символов';
         }
    }

     function unique($value){
//        $users = new Users;
//         $post = ['name' => 'ыыы',
//             'email' => 'ы',
//             'password' => '12345',
//             're_password' => '12345'];
//        $users->find([$value=>$post[key($value)]]);
//        var_dump($users);
        
    }

     function charnum($value){
        
    }

     function injection($value){
        
    }

     function email($value){
        
    }

     function repeat($value, $arg){
        
    }

     function error($value, $error){

    }













//$ = $request->validate([
//    'title' => 'required|unique:posts|max:255',
//    'body' => 'required',
//]);


