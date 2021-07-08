<?php
    class Database{
        private $server = "localhost";
        private $username = "root";
        private $password = ""; 
        private $dbname = "pwksdb";

        public $conn;

        public function getConnection(){
            try{
                $conn = new PDO("mysql:host=" . $this->server . ";dbname=" 
                . $this->dbname, $this->username, $this->password);
                //$this->conn->exec("set names utf8");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
                
            }catch(PDOException $e){
                echo "Connection Error : " . $e->getMessage();
                exit;
            }
            
        }
        
    }

?>