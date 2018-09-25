<?php

function view($view){
    return "views/$view.blade.php";
}

function direct($uri){

    // routes.php
    $routes = [
        '/' => 'controllers/tasks.php',
        '/tasks'=>'controllers/tasks.php',
        '/people'=>'controllers/people.php',
        '/lessons'=>'controllers/lessons.php',
        '/about'=>'controllers/about.php',
        '/contact'=>'controllers/contact.php',
    ];
    //Route::define('tasks', controllers/tasks.php');
    if (array_key_exists($uri,$routes)){
        return $routes[$uri];
    }else{
        return new Exception('La pàgina web no existeix');
    }


}