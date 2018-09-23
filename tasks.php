<?php

require 'models/Task.php';
require 'framework/bootstrap.php';

$tasks = Task::all();

require 'views/tasks.blade.php';