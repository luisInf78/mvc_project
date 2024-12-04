<?php

    require_once "./config/database.php";

    class User{

        private $conn;
        private $table = 'user';

        function __construct(){
            $databse = new Database();
            $this->conn = $databse->getConnection();
        }

        public function getAll(){
            $query = "SELECT * FROM " . $this->table;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function create($name,$email){
            $query = "INSERT INTO " . $this->table . "(name, email) VALUES (:name, :email)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':name', $name );
            $stmt->bindParam(':email', $email );
            return $stmt->execute();

        }


    }

?>