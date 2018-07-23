<?php

return [
    '/' => 'MainController@index',
    '/product' => 'ProductController@index',
    '/login' => 'AuthController@login',
    '/register' => 'AuthController@register',
    '/logout' => 'AuthController@logout',
    '/basket' => 'BasketController@index'
];
