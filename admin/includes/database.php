<?php
require_once('new_config.php');
    class Database{
        public $connection;

        function __contruct(){
            $this->open_database_connection();
        }

        public function open_database_connection(){

            $this->connection = mysqli_connect((DB_HOST,DB_USER,DB_PASS,DB_NAME);
            
        }
    }

    $database = new Database();
    
?>