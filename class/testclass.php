<?php
    class Test {
        private $conn;
        private $db_table = "test";

        public $id;
        public $name;
        public $surname;

        public function __construct($db)
        {
            $this->conn = $db;
        }

        public function inserttest(){
            $sql = $sql = "INSERT INTO test (name, surname)
            VALUES (:name, :surname)";

            $stmt = $this->conn->prepare($sql);
            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->surname=htmlspecialchars(strip_tags($this->surname));

            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":surname", $this->surname);
 
            $stmt->execute();
        //     if($stmt->execute()){
        //         return true;
        //      }
        //      return false;
        }
    }

?>