<?php

    class query extends Database {
        public function FindUser($table,$username,$password) {
            if(isset($username) && isset($table)) {
                $query = "SELECT * FROM $table WHERE username = '$username'";
                $exe = $this->connect()->query($query);
                if($exe->num_rows > 0) {
                    $array[] = $exe->fetch_assoc();

                    if(password_verify($password,$array[0]['password'])) {
                        return $array;
                    }
                }
            }
        }
        public function FilterString($string) {
            return htmlentities(mysqli_real_escape_string($this->connect(), $string));
        }
    }
?>