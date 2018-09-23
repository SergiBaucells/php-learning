<?php

class Connections{

    public static function connect($config)
    {
        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }catch(PDOException $e){
            die('Could not connected: ' . $e);
        }
    }

}