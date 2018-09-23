<?php

class QueryBuilder{
    public static function fetchAll($connection, $table){
        $statement = $connection->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}