<?php

namespace App;

use App\Route;

class Init
{
    static function start()
    {
        $route = new Route();
        $route -> routing();
    }
}
