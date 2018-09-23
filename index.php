<?php

//var_dump($_GET);
//die();

//Array
//$platan = 'platan';
//$presec = 'prèsec';
//$taronja = 'taronja';
//$fruites = [$platan, $str, $taronja];
//echo $fruites[0];
//die();

// Array associatiu
//$person = [
//        'name' => 'Sergi Baucells',
//        'dni' => '47475729Z',
//        'mobile' => '645898261'
//];

require 'functions.php';

$greeting = hello($_GET['greeting']);

require 'views/index.blade.php';