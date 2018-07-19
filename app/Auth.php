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
    private function authorize($user)
    {
        $_SESSION['user'] = ['id'=>$user['id'],'name'=>$user['name']];
        header( 'Location: /');
    }

    static function check()
    {
        if(isset($_COOKIE[session_name()]) && isset($_SESSION['user'])){
            if($_COOKIE[session_name()] == session_id()){
                return $_SESSION['user'] ;
            }
        }
        return false;
    }

    public function authToken(){
        if (isset($_COOKIE['token'])){
            $users = new Users();
            $user = $users->find(['remember_token' => $_COOKIE['token']]);
            $_SESSION['user'] = ['id'=>$user['id'],'name'=>$user['name']];
            $_COOKIE[session_name()] = session_id();
            return true;
        }else{return false;}
    }

    public function login($request)
    {
        $users = new Users();
        $user = $users->find(['email'=>$request['email']]);
        if(!empty($user) &&
                        $user['email'] == $request['email'] &&
                        $user['password'] == $request['password']){
            if(isset($request['remember'])){
                $remember_token = md5(uniqid(rand(), true));
                setcookie('token', $remember_token, time()+86400);
                $users->update(['remember_token'=>$remember_token],['id'=>$user['id']]);
            }
            $this->authorize($user);
        }else{
            echo 'user not';
        }
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
        $result = $user->create(['name'=>$request['name'],
                        'email'=>$request['email'],
                        'password'=>$request['password']
                        ]);
        if($result != 0){
            $this->authorize($request);
        } else {
            echo 'добавление юзера НЕ успешно';
        }
    }

    public function logout()
    {
        setcookie(session_name(), '', time() - 1);
        setcookie('token', '', time()-1);
        unset($_SESSION[session_id()]);
        header( 'Location: /');
    }
}
