<?php
    class Database{

        public function open_database_connection(){

            $this->connection = mysqli_connect((DB_HOST,DB_USER,DB_PASS,DB_NAME);
            
        }
    }
    $database = new Database();
    $database->open_database_connection();

?>