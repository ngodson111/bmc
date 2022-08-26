<?php
    class query extends Database {
        //FILTERING STRING TO PREVENT XXS AND SQL INJECTION
        public function FilterString($string) {
            return htmlentities(mysqli_real_escape_string($this->connect(), $string));
        }
        //REMOVING DOUBLE SPACE
        public function RemoveWhiteSpace($string) {
            return preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);
        }
        //HASHING STRING
        public function HashString($string) {
            $options = [
                'cost' => 12,
            ];
            return password_hash($string,PASSWORD_BCRYPT,$options);
        }
        //VERIFYING HASHED STRING
        public function VerifyString($oldstring,$newstring) {
            return password_verify($oldstring,$newstring);
        }

        //RETRIVE DATA
        public function RetriveData($tablename,$array = null) {
            if(isset($tablename)) {
                if($array === null) {
                    $query = "SELECT * FROM $tablename";
                }else {
                    $totalFields = count($array);
                    $query = "SELECT * FROM $tablename WHERE ";
                    $counter = 1;
                    foreach($array as $fieldname=>$value) {
                        if($totalFields == $counter) {
                            $query .= "$fieldname = '$value'";
                        }else {
                            $query .= "$fieldname = '$value' AND ";
                        }
                        $counter++;
                    }
                }
                $exe = $this->connect()->query($query);
                $arrays = [];
                if($exe->num_rows > 0) {
                    while($rows = $exe->fetch_assoc()) {
                        $arrays[] = $rows;
                    }

                    return $arrays;
                }else {
                    return $arrays;
                }
            }
        }

        //UPDATING DATA
        public function UpdateTable($tablename,$array,$uid) {
            $totalFields = count($array);
            $query = "UPDATE $tablename SET ";
            $counter = 1;
            foreach($array as $fieldname=>$value) {
                if($totalFields == $counter) {
                    $query .= "$fieldname = '$value'";
                }else {
                    $query .= "$fieldname = '$value', ";
                }
                $counter++;
            }

            $query .= ",inserted = NOW() WHERE uid = '$uid'";
            
            $exe = $this->connect()->query($query);

            return $exe;
        }

        //INSERT DATA
        public function InsertData($tablename,$array) {
            if(isset($tablename) && isset($array)) {
                $random = rand();
                $count = count($array);
                $counter = 1;
                $query = "INSERT INTO $tablename VALUES(NULL,'$random',";
                foreach($array as $key=>$value) {
                    if($count == $counter) {
                        $query .= "'$value', NOW())";
                    }else {
                        $query .= "'$value',";
                    }
                    $counter++;
                }

                $exe = $this->connect()->query($query);

                return $exe;
            }
        }

        //DELETE DATA
        public function DeleteData($tablename,$uid) {
            if(isset($tablename) && isset($uid)) {
                $query = "DELETE FROM $tablename WHERE uid='$uid'";
                $exe = $this->connect()->query($query);

                return $exe;
            }
        }

        //FOR UPLOADING FILES
        public function UploadFile($filenewname,$filetempname,$filedestination) {
            //UPLOADING IMAGE
            $uploading = move_uploaded_file($filetempname , $filedestination);
            return $uploading;
        }

        //FOR EXPORTING EXCEL 
        // public function ExportExcel($table) {
        //     $output = '';
        //     $query = "SELECT * FROM $table ORDER BY id DESC";
        //     $run = $this->connect()->query($query);
        //     if($run->num_rows > 0) {
        //         $output .= '
        //             <table class="table" border="1">
        //                 <tr>
        //                     <th>SN.</th>
        //                     <th>Full Name</th>
        //                     <th>Email</th>
        //                     <th>Contact</th>
        //                     <th>DOB</th>
        //                     <th>Parents Name</th>
        //                     <th>Program</th>
        //                     <th>Remark</th>
        //                     <th>Time</th>
        //                 </tr>
        //         ';
        //         $counter=1;
        //         while($row = $run->fetch_assoc()) {
        //             $output .= '
        //                 <tr>
        //                     <td>'. $counter .'</td>
        //                     <td>'. $row['name'] .'</td>
        //                     <td>'. $row['email'] .'</td>
        //                     <td>'. $row['phone'] .'</td>
        //                     <td>'. $row['dob'] .'</td>
        //                     <td>'. $row['parents'] .'</td>
        //                     <td>'. $row['program'] .'</td>
        //                     <td>'. $row['remark'] .'</td>
        //                     <td>'. $row['inserted'] .'</td>
        //                 </tr>
        //             ';
        //             $counter++;
        //         }
        //         $output .= '</table>';

        //         $filename = "Applicant-Details-" . rand() . "-" . date("y-m-d") . ".xls";

        //         header('Content-Description: File Transfer');
        //         header('Content-Type: application/xls');
        //         header('Content-Disposition: attachment; filename=' . basename($filename));
        //         header('Content-Transfer-Encoding: binary');
        //         header('Expires:0');
        //         header('Cache-Control: must-revalidate');
        //         header('Pragma: public');
        //         header('Content-Length: ' . filesize($filename));

        //         ob_clean();
        //         flush();
        //     }
        // }
    }
?>