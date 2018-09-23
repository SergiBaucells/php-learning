<?php

class Task
{
    // Definir propietat
    public $name;
    public $completed;

    // Constructor, Alt + Insert (Per crear-lo)
    /**
     * Task constructor.
     * @param $name
     * @param $completed
     */
    public function __construct($name = '', $completed = false)
    {
        $this->name = $name;
        $this->completed = $completed;
    }
    
    // Encapsular, guardar funcions
    public function complete()
    {
        $this->completed = true;
    }

    public static function all()

    {
        $config = require 'framework/config.php';
        $pdo = Connections::connect($config['database']);
        return QueryBuilder::fetchAll($pdo,'Tasks');
    }

}