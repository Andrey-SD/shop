<?php

use App\Auth;
use App\Validator;

class AuthController
{
    public function login()
    {
        $request = $_POST;
        $validator = new Validator();
        if($validator -> run($user)){
            $auth = new Auth();
            $auth -> login($request);
        }else{

        };

    }

    public function register()
    {

        $user = $_POST;
        $validator = new Validator();

        $auth = new Auth();
        $auth -> register($user);
    }
}