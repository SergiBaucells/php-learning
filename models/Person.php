<?php


class Person
{
    // Definir propietat
    public $name;
    public $dni;
    public $date;

    /**
     * Task constructor.
     * @param $name
     * @param $dni
     * @param $date
     */
    public function __construct($name, $dni, $date)
    {
        $this->name = $name;
        $this->dni = $dni;
        $this->date = $date;
    }

    public static function all()
    {
        $config = require 'framework/config.php';
        $pdo = Connections::connect($config['database']);
        return QueryBuilder::fetchAll($pdo,'people');
    }

}