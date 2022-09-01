<?php
    //CONNECTING TO DATABASE
    class Database {
        private $localhost;
        private $username;
        private $password;
        private $databasename;
        protected function connect() {
            $this->localhost = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->databasename = 'butwal_bmc';
            // $this->localhost = 'localhost';
            // $this->username = 'alexremi_bmc';
            // $this->password = 'alexremi_bmc';
            // $this->databasename = 'alexremi_bmc';
            
            $connection = new mysqli($this->localhost,$this->username,$this->password,$this->databasename);
    
            return $connection;
        }

    }
?>