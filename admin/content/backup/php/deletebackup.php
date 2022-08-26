<?php
    if(isset($_GET['ipxname'])) {
        $name = "../" . $_GET['ipxname'];
        $res = unlink($name);
        if($res) {
            ?>
                <script>
                    window.open('../../index.php',"_self");
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("Error Deleting Backup");
                    window.open('../../index.php',"_self");
                </script>
            <?php
        }
    }else {
        ?>
            <script>
                window.open('../../index.php',"_self");
            </script>
        <?php
    }
?>