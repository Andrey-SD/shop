<?php

use App\Auth;

class Init
{
    static function start()
    {
        define('ROOT', dirname( __DIR__).'/');
        define('VIEWS', ROOT.'/public/views/');
        require_once dirname( __DIR__).'/vendor/autoload.php';
        session_start();
        $auth_token = new Auth;
        $auth_token->authToken();
    }
}
