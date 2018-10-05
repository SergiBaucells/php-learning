<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public static function fetchAll($connection, $table)
    {
        $statement = $connection->prepare("SELECT * FROM $table");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public static function insert($table, $parameters)
    {
        $connection = Connection::connect();
        $sql = sprintf('insert into %s (%s) values (%s)', $table, implode(', ', array_keys($parameters)), implode(',', array_values($parameters)));
        try {
            $statement = $connection->prepare($sql);
            $statement->execute($parameters);
            } catch (Exception $e) {
            //
        }
    }
}