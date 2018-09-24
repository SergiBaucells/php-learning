<?php

class Connection{
    public static function connect()
    {
//        try{
//            return new PDO(
//                $config['connection'].';dbname='.$config['name'],
//                $config['username'],
//                $config['password'],
//                $config['options']
//            );
//        }catch(PDOException $e){
//            die('Could not connected: ' . $e);
//        }
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','DOd3NQfVnIUYBb0e');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}