<?php

require 'vendor/autoload.php';
require 'framework/bootstrap.php';

require Router::direct($_SERVER['REQUEST_URI']);
