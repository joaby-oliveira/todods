<?php
    class TableController {
        private $dbh;
        public function insertTable($name){
            $sql = 'INSERT INTO tables (name) VALUES (:name)';
            $this->dbh->prepare($sql);
            $this->dbh->bindParam(':name', $name);
            $this->dbh->execute();
        }
        public function deleteTable($id){
            $sql = 'DELETE FROM tables where id = :id';
            $this->dbh->prepare($sql);
            $this->dbh->bindParam(':id', $id);
            $this->dbh->execute();
        }
        public function modifyTable($name){
            $sql = 'UPDATE tables SET name=:name';
            $this->dbh->prepare($sql);
            $this->dbh->bindParam(':name', $name);
            $this->dbh->execute();
        }
        public function viewTables(){
            $sql = 'SELECT * FROM tables';
            $this->dbh->prepare($sql);
            $this->dbh->execute();
            return $this->dbh->fetchAll();
        }
        public function __construct($dbh){
            $this->dbh=$dbh;
        }
    }

?>