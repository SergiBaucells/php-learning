<?php

$tasks = Task::all();

require view('tasks',[$tasks]);