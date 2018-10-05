<?php

namespace App\Framework;

use Connection;
use QueryBuilder;

require 'database/Connection.php';
require 'database/QueryBuilder.php';

App::bind('config', require 'config.php');

$routes = require 'app/routes.php';

Router::define($routes);

function redirect($path){
    header("Location: /{$path}");
}