<?php
    //CONNECTING TO DATABASE
    class backup_Database {
        protected function connect() {
            $connection = new PDO("mysql:host=localhost;dbname=horizon", "root", "");
    
            return $connection;
        }

    }
?> 