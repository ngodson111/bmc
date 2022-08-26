<?php
    include "../../php/connect.php";
    include "./mainendpoint.php";
    if(isset($_POST['messagesbtn'])) {
        $object = new query();
        
        $name = $object->FilterString($_POST['name']);

        $email = $object->FilterString($_POST['email']);

        $fremark = $object->FilterString($_POST['remark']);
        $remark = $object->RemoveWhiteSpace($fremark);

        if(empty($name) || empty($email) || empty($remark)) {
            ?>
                <script>
                    alert("Fields cannot be empty!");
                    window.open('../../../contact.php',"_self");
                </script>
            <?php
        }
        $array = array( 'name' => $name, 'email' => $email, 'remark' => $remark );
        $insert = $object->InsertData('messages',$array);

        if($insert == 1) {
            ?>
                <script>
                    window.open('../../../contact.php',"_self");
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert('Error Occured!');
                    window.open('../../../contact.php',"_self");
                </script>
            <?php
        }
    }
?>