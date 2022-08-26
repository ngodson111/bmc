<?php
    include("./backup/php/connect.php"); //CUSTOM PDO CONNECTION

    class backup extends backup_Database {

        public function ShowTables() { //SHOW THE TABLES OF DATABASE
            $query = "SHOW TABLES";
            $data = $this->connect()->prepare($query);
            $data->execute();
            $result = $data->fetchAll();
            return $result;
        }

        public function BackupTables() {
            $obj = new backup();
            $data = $obj->ShowTables();
            
            $output = '';
            foreach ($data as $item) {
                $show_table_query = "SHOW CREATE TABLE " . $item[0] . "";
                $execute = $this->connect()->prepare($show_table_query);
                $execute->execute();
                $fetcheddata = $execute->fetchAll();

                foreach($fetcheddata as $row) { //CREATING TABLE EXPANSION
                    $output .= "\n\n" . $row['Create Table'] . ";\n\n";
                }
                
                $selectQuery = "SELECT * FROM " . $item[0] . "";
                $exe = $this->connect()->prepare($selectQuery);
                $exe->execute();
                $total = $exe->rowCount();

                for($count = 0;$count < $total;$count++) {
                    $singleRes = $exe->fetch(PDO::FETCH_ASSOC);
                    $tableColArray = array_keys($singleRes);
                    $tableValArray = array_values($singleRes);
                    $output .= "\nINSERT INTO $item[0] (";
                    $output .= "" . implode(", ", $tableColArray) . ") VALUES (";
                    $output .= "'" . implode("','", $tableValArray) . "');\n";
                }
            }

            $filename = "NewHorizon-Backup-" . rand() . "-" . date('y-m-d') . ".sql";

            $filehandel = fopen("./backup/".$filename, 'w+');

            fwrite($filehandel, $output);
            fclose($filehandel);
            return 1;
        }

        //NOT IMPLIMENTED
        public function UploadBackup($filename) {
            $output = '';
            $count=0;
            $filedata = file($filename);

            foreach($filedata as $row) {
                $start_character = substr(trim($row), 0, 2);
                if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != ''){
                    $output = $output . $row;
                    $end_character = substr(trim($row), -1, 1);
                    if($end_character == ';'){
                        $e = $this->connect()->prepare($output);
                        if(!$e->execute()){
                            $count++;
                        }
                        $output = '';
                    }
                }
            }
        }
    }
?>