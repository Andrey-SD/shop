<?php

use App\Auth;
use App\Validator;

class AuthController
{
    public function login()
    {
        $user = $_POST;
        $validator = new Validator();
        echo $validator -> run($user);
        if($validator -> run($user)){
            $auth = new Auth();
            $auth -> login($user);
        }else{};

    }

    public function register()
    {
        $user = $_POST;
        $validator = new Validator();
        echo $validator -> run($user);
        $auth = new Auth();
        $auth -> register($user);
    }
}