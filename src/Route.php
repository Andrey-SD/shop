<?php

namespace Src;

class Route
{
    /**
     *
     */
    static function routing()
    {
        $routes = require ROOT.'routes/web.php';
        $url = parse_url($_SERVER['REQUEST_URI']);
        if (!empty($routes[$url['path']])){
            $explode = explode('@',$routes[$url['path']]);
            $controller = $explode[0];
            $action = $explode[1];
            require ROOT.'app/Controllers/'.$controller.'.php';
            $class = new $controller;
            $class -> $action($url);
        } else {
            $errors = new Errors();
            $errors->errorsShow('404');
        };
    }
}
