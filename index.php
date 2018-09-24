<?php

require 'vendor/autoload.php';
require 'framework/bootstrap.php';


require direct($_SERVER['REQUEST_URI']);
//require Router::direct($_SERVER['REQUEST_URI']);



