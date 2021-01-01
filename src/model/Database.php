<?php
include '../config/Config.php';
class Database extends Config
{
    private $dsn;
<<<<<<< HEAD
    private $dbh;
    public function __construct()
    {
        $config = new Config();
        $this->dsn = "mysql:host=" . $config->host . ";dbname=" . $config->dbname;
        try {
            $dbh = new PDO($this->dsn, $config->user, $config->password);
            $this->dbh = $dbh;
=======

    public function __construct()
    {
        $config = new Config();
        $this->dsn = "mysql:host" . $config->host . ";dbname:" . $config->dbname;
        try {
            $dbh = new PDO($this->dsn, $config->user, $config->password);
            return $dbh;
>>>>>>> a84d340d39da7f0624638fdbf459fdf1bfe8845e
        } catch (PDOException $e) {
            return $e->getMessage();;
        }
    }
<<<<<<< HEAD
    public function createConnection() {
        return $this->dbh;
    }
=======
>>>>>>> a84d340d39da7f0624638fdbf459fdf1bfe8845e
}
