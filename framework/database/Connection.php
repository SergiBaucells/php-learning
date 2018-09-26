<?php

class Connection
{
    public static function connect()
    {
        $database = config('database');

        try {
//            return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','DOd3NQfVnIUYBb0e');
            return new PDO($database['type'] . ':host=' . $database['host'] . ';dbname=' . $database['name'], $database['user'], $database['password']);
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}