<?php

class DBConnect
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "hw22";

    public function connect()
    {
        $dsn = 'mysql:host=' . $this->host . "; dbname=" . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
