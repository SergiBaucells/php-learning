<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'config.php';

$routes =require 'routes.php';

Router::define($routes);