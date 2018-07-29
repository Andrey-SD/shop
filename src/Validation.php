<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 16:24
 */

namespace Src;

use App\Models\Users;

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
                    $_SESSION['errors'] = ['field'=>$field,'error'=>$result];
                    $_SESSION['old_value'] = $request;
                    return false;          
                }
            }
        }
        return true;
    }
    
    function required($value)
    {
        if(empty($value)){
            return 'Введите данные';
        }
    }
    
    function maxi($value, $arg){
         if (strlen($value) > $arg){
             return 'Максимум '.$arg.' символов';
         }
    }

    function mini($value,$arg){
         if (strlen($value) < $arg){
             return 'Минимум '.$arg.' символов';
         }
    }

    function unique($value, $arg){
        $users = new Users;
        $result = $users->find([$arg=>$value]);
        if($result){
           return $value.' уже занято.'; 
        }
        
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
}
