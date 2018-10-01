<?php

require 'vendor/autoload.php';
require 'framework/bootstrap.php';

use App\Framework\Router;

Router::direct($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);