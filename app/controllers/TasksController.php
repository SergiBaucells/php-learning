<?php

namespace App\Controllers;

use App\Framework\App;
use App\Models\Task;
use Connection;
use QueryBuilder;

class TasksController
{
    public function index()
    {
        $tasks = Task::all();
        require view('tasks');
    }

    public function store()
    {
        //App::get('database')->insert('Tasks', [
        //    'name' => $_POST['name']
        //]);

        QueryBuilder::insert('Tasks', [
            'name' => $_POST['name']
        ]);

        return redirect('tasks');
    }
}