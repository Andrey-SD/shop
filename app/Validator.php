<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 18:01
 */

namespace App;


class Validator
{
    public $validator_errors;

    public function run($user)
    {
        if (sizeof($user) == 0){
            $error = new Errors();
            $error->errorsShow('404');
        }

        foreach ($user as $validate){
            if (empty($validate)){
                $this->validator_errors = 'Поле не может быть пустым';
                return $this->validator_errors;
            }

            if (strlen($validate)>64){
                $this->validator_errors = 'Поле не может быть 64 символов';
                return $this->validator_errors;
            }
        }

        if (isset($user['name'])){
            if (preg_match ('/[^\w]/u',$user['name'])){
                $this->validator_errors =  'Поле должно содержать только буквы,цифры и _';
                return $this->validator_errors;
            }
        }

        if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
            $this->validator_errors = 'E-mail должен содержать точки и @';
            return $this->validator_errors;
        }

        if (isset($user['password']) && isset($user['re_password'])){
            if($user['password'] != $user['re_password']){
                $this->validator_errors = 'Пароли не совпадают';
                return $this->validator_errors;
            }

        }

        return true;
    }
}
