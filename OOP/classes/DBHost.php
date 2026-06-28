<?php

class DBHost
{

    private $host = "localhost";
    private $dbName = "myfirst_db";

    private $dbUsername = "root";
    private $dbPassword = "";

    // connect to MYsql
    protected function connect()
    {

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;

            $pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // make sure to return pdo
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
