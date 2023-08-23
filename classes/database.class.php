<?php

class Database
{
    protected $host = "localhost";
    protected $dbName = "test";
    protected $username = "root";
    protected $password = "";

    protected function connect()
    {
        try {
            $dbName = "test";
            $username = "root";
            $password = "";
            $dbh = new PDO("mysql:host=localhost;dbname=" . $dbName, $username, $password);
            return $dbh;

        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br>";
            die();
        }
    }
}