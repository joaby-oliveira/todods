<?php
include '../config/Config.php';
class Database extends Config
{
    private $dsn;
    private $dbh;
    public function __construct()
    {
        $config = new Config();
        $this->dsn = "mysql:host=" . $config->host . ";dbname=" . $config->dbname;
        try {
            $dbh = new PDO($this->dsn, $config->user, $config->password);
            $this->dbh = $dbh;
        } catch (PDOException $e) {
            return $e->getMessage();;
        }
    }
    public function createConnection() {
        return $this->dbh;
    }
}
