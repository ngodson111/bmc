<?php
    if(isset($_POST['backupbtn'])) {
        $obj = new backup();
        $row = $obj->BackupTables();
        if($row) {
            ?>
                <script>
                    window.open('./index.php',"_self");
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("Error Backup");
                    window.open('./index.php',"_self");
                </script>
            <?php
        }
    }
?>