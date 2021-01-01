<?php
    class UserController {
        private $dbh;
        public function insertUser($name, $birthday, $gender, $email, $password, $nickname){
            $sql = 'INSERT INTO tables (name, birthday, gender, email, password, nickname) VALUES (:name, :birthday, :gender, :email, :password, :nickname)';
            $this->dbh->prepare($sql);
            $this->dbh->bindParam(':name', $name);  
            $this->dbh->bindParam(':birthday', $birthday);
            $this->dbh->bindParam(':gender', $gender);
            $this->dbh->bindParam(':email', $email);
            $this->dbh->bindParam(':password', $password);
            $this->dbh->bindParam(':nickname', $nickname);
            $this->dbh->execute();
        }
        public function deleteUser($id){
            $sql = 'DELETE FROM users where id = :id';
            $this->dbh->prepare($sql);
            $this->dbh->bindParam(':id', $id);
            $this->dbh->execute();
            
        }   
        public function modifyUser($name, $birthday, $gender, $email, $password, $nickname){
            $sql = 'UPDATE tables SET name=:name, birthday=:birthday, gender=:gender, email=:email, password=:password, nickname=:nickname, ';
            $this->dbh->prepare($sql);
            
            $this->dbh->bindParam(':birthday', $birthday);
            $this->dbh->bindParam(':gender', $gender);
            $this->dbh->bindParam(':email', $email);
            $this->dbh->bindParam(':password', $password);
            $this->dbh->bindParam(':nickname', $nickname);

            $this->dbh->execute();
        }
        public function viewUser(){
            $sql = 'SELECT * FROM users';
            $this->dbh->prepare($sql);
            $this->dbh->execute();
            return $this->dbh->fetchAll();
        }
        public function __construct($dbh){
            $this->dbh=$dbh;
        }
    }

?>