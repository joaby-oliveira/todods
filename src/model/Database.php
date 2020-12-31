<?php
include '../config/Config.php';
class Database extends Config
{
    private $dsn;

    public function __construct()
    {
        $config = new Config();
        $this->dsn = "mysql:host" . $config->host . ";dbname:" . $config->dbname;
        try {
            $dbh = new PDO($this->dsn, $config->user, $config->password);
            return $dbh;
        } catch (PDOException $e) {
            return $e->getMessage();;
        }
    }
}
