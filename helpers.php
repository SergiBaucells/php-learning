<?php

if(!function_exists('view')){
    function view($view){
        return "app/views/$view.blade.php";
    }
}
