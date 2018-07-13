<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 10:57
 */

namespace App;


class Errors
{
    public function errorsShow($error_code)
    {
        http_response_code($error_code);
    }
}