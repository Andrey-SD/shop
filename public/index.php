<?php

use App\Route;
use App\Db;

require_once dirname( __DIR__).'/app/Init.php';
Init::start();
Route::routing();
