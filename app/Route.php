<?php

namespace App;

class Route
{
    /**
     *
     */
    static function routing()
    {
        $routes = require ROOT.'routes/web.php';
        if (!empty($routes[$_SERVER['REQUEST_URI']])){
            $explode = explode('@',$routes[$_SERVER['REQUEST_URI']]);
            $class_name = $explode[0];
            $method_name = $explode[1];
            require_once ROOT.'controllers/'.$class_name.'.php';
            $class = new $class_name;
            $class -> $method_name();
        } else {
            echo 'Страница не найдена';
        };
    }
}
