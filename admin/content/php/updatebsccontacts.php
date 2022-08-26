<?php
    //UPDATE OPERATION
    if(isset($_POST['updatebscbtn'])) {
        $obj = new query();

        $location = $obj->filterString($_POST['bsclocation']);
        $number = $obj->filterString($_POST['bscnumber']);
        $number1 = $obj->filterString($_POST['bscnumber1']);
        $uid = 1;
        if($number1 == "" || $number1 == NULL) {
            $number1 = "-";
        }

        $array = array('bsclocation'=>$location,'bscnumber' => $number, 'bscnumber1' => $number1);
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