<?php

use App\Route;
use App\Model;


require_once dirname( __DIR__).'/app/Init.php';
Init::start();
//Route::routing();
$array = ['name'=>'andrey',
            'email'=>'a@a.com',
            'password'=>'1234'
        ];
use Models\Users;
$user = new Users($array);
$user->create($user);
//$result = $model->create();
//var_dump($result);
