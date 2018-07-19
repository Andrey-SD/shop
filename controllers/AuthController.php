<?php

use App\Auth;
use App\Validator;

class AuthController
{
    public function login()
    {
        $request = $_POST;
        $validator = new Validator();
        if($validator -> run($request)){
            $auth = new Auth();
            $auth -> login($request);
        }
    }

    public function register()
    {
        $request = $_POST;
        $validator = new Validator();
        if($validator -> run($request)){
            $auth = new Auth();
            $auth -> register($request);
        }

    }

    public function logout()
    {
        $auth = new Auth();
        $auth -> logout();
    }
}

