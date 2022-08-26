<?php
    //UPDATE OPERATION
    $action;
    if(isset($_POST['updatenoadmission'])) {
        $action = "No";
        $obj = new query();
        $uid = 1;

        $array = array('admission' => $action);
        $result2 = $obj->UpdateTable('contacts',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                window.open('./index.php?page=6',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
                window.open('./index.php?page=6',"_self")
            </script>
            <?php
        }
    }
    if(isset($_POST['updateyesadmission'])) {
        $action = "Yes";
        $obj = new query();
        $uid = 1;

        $array = array('admission' => $action);
        $result2 = $obj->UpdateTable('contacts',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
            window.open('./index.php?page=6',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=6',"_self")
            </script>
        <?php
        }
    }
?>