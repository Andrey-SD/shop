<?php

use App\Auth;
use Src\Validation;

class AuthController
{
    public function login()
    {
        $request = $_POST;
        $validation = new Validation();
        if($validation -> run($request,[                                       'name'=>'required|mini:6',
            'password' => 'required|mini:6'])){
            $auth = new Auth();
            $auth -> login($request);
        }else{
            $_SESSION['errors']['form']='Login';
            header( 'Location: /');
        }
    }

    public function register()
    {
        $request = $_POST;
        $validation = new Validation();
        if($validation -> run($request,[
                            'name'=>'required|maxi:64|mini:6|unique:name|charnum|injection',
                            'email'=>'required|mini:6|unique:email|email|injection',
                            'password' => 'required|mini:6',
                            're_password' => 'required|repeat:password'])){
            $auth = new Auth();
            $auth -> register($request);
        }else{
            $_SESSION['errors']['form']='Register';
            header( 'Location: /');
        }

    }

    public function logout()
    {
        $auth = new Auth();
        $auth -> logout();
    }
}

