<?php

namespace Asis\OopProject\Database;
// require '../../vendor/autoload.php';

// use Exception;

class DatabaseConnection
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    public $connection;

    public function __construct($host = "localhost", $username = "root", $password = "", $dbname = "login")
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connection = mysqli_connect($host, $username, $password, $dbname);
    }

    public function connection()
    {
        return $this->connection;
    }
}





?>