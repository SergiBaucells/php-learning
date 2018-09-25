<?php

if(!function_exists('view')){
    function view($view){
        return "views/$view.blade.php";
    }
}
