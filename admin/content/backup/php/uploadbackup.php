<?php
    if(isset($_POST['uploadbackupbtn'])) {
        $filename = "./backup/" . $_POST['name'];

        $obj = new backup();

        $res = $obj->UploadBackup($filename);

        if($res) {
            echo "Yes";
        }else {
            echo "No";
        }
    }
?>
