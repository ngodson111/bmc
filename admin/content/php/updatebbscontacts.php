<?php
    //UPDATE OPERATION
    if(isset($_POST['updatebbsbtn'])) {
        $obj = new query();

        $location = $obj->filterString($_POST['bbslocation']);
        $number = $obj->filterString($_POST['bbsnumber']);
        $number1 = $obj->filterString($_POST['bbsnumber1']);
        $number2 = $obj->filterString($_POST['bbsnumber2']);
        $uid = 1;

        if($number1 == "" || $number1 == NULL) {
            $number1 = "-";
        }
        if($number2 == "" || $number2 == NULL) {
            $number2 = "-";
        }

        $array = array('bbslocation'=>$location,'bbsnumber' => $number, 'bbsnumber1' => $number1, 'bbsnumber2' => $number2);
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