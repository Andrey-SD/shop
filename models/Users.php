<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 15:57
 */

namespace Models;

use App\Model;


class Users extends Model
{
    public $name;
    public $email;
    public $password;
    public $role;

}
