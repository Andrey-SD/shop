<?php

use App\Route;
use Models\Users;
//use Src\Validation;

require_once dirname( __DIR__).'/app/Init.php';
Init::start();
//Route::routing();



$request = ['name' => 'dd5_dnd',
    'email' => 'dddd@gg.dddd',
    'password' => '12345',
    're_password' => '12345'];
$rules = [
    'name'=>'required|maximum:64|minimum:6|unique:name|charnum|injection',
    'email'=>'required|minimum:6|unique:email|email|injection',
    'password' => 'required',
    're_password' => 'required|repeat:password'
];

$validation = new Validation;
$validation->run($request, $rules);

class Validation
{
    private $request;
    
    function run($request, $rules)
    {
        $this->request = $request;
        $arg = null;
        foreach ($rules as $field=>$rule){
            $explode = explode('|', $rule);
            foreach ($explode as $action){
                $explode_action[1] = null;
                $explode_action = explode(':', $action);
                $function = $explode_action[0];
                if(isset($explode_action[1])){
                    $arg = $explode_action[1];
                }
                $result = $this->$function($request[$field],$arg);
                if($result){
                   echo $field.' '.$result.'<br>';
                }
            }
        }
    }
    
    function required($value)
    {
        if(empty($value)){
            return 'Введите данные';
        }
    }
    
    function maximum($value, $arg){
         if (strlen($value) > $arg){
             return 'Максимум '.$arg.' символов';
         }
    }

    function minimum($value,$arg){
         if (strlen($value) < $arg){
             return 'Минимум '.$arg.' символов';
         }
    }

    function unique($value, $arg){
//        $users = new Users;
//        $result = $users->find([$arg=>$value]);
//        if($result){
//           return $value.' уже занято.'; 
//        }
        
    }

    function charnum($value){
        if(preg_match ('/[^\w]/u',$value)){
            return 'Только буквы, цифры и _';
        }
    }

    function injection($value){
        
    }

    function email($value){
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return 'E-mail должен содержать точки и @';
        }
    }

    function repeat($value, $arg){
        if ($value != $this->request[$arg]){
            return 'Поля не совподают';
        }
    }

    function error($value, $error){

    }

}
