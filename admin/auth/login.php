<?php
    if(isset($_POST['btn'])){
        $object = new query();

        $username = $object->FilterString($_POST['username']);
        $password = $object->FilterString($_POST['password']);

        $result = $object->FindUser('auth',$username,$password);

        if(isset($result[0])) {
            $_SESSION['ipvx-bmc-username'] = $result[0]['username'];
            ?>
                <script>
                    window.open("./content/index.php","_self");
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("UnAuthorized Access");
                    window.open("./index.php","_self");
                </script>
            <?php
        }
    }
?>