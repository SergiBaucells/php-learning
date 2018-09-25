<?php

class Lesson
{
    // PROPIETATS
    public $name;


    /**
     * Lesson constructor.
     * @param $name
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public static function all()
    {
//        $config = require 'framework/config.php';
//        $pdo = Connection::connect($config['database']);
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'lessons');
    }
}