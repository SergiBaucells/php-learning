<?php

require 'vendor/autoload.php';
require 'framework/bootstrap.php';

Router::direct($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);