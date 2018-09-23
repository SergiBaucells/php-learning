<?php

require 'framework/bootstrap.php';
require 'models/Task.php';

$tasks = Task::all();

require 'views/tasks.blade.php';