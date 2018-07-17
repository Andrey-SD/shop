<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 15:04
 */

namespace App;

use Models\Users;

class Auth
{
    public function login($user)
    {

    }

    public function register($request)
    {
        $user = new Users();
        $isset = $user->find(['name'=>$request['name']]);
        if($isset){
            echo 'Пользователь с таким именем существует';
            return ('Пользователь с таким именем существует');
        };

        $isset = $user->find(['email'=>$request['email']]);
        if($isset){
            echo 'Пользователь с таким Email существует';
            return ('Пользователь с таким Email существует');
        };
        echo 'this';
        $user->create($request);


    }
}