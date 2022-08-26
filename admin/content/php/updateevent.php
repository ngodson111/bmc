<?php
    //UPDATE OPERATION
    if(isset($_POST['updateeventbtn'])) {
        $obj = new query();

        $title = $obj->filterString($_POST['title']);
        $event = $obj->filterString($_POST['event']);
        $uid = $obj->filterString($_POST['uid']);

        $array = array('title'=>$title,'description' => $event);
        $result2 = $obj->UpdateTable('event',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                
            window.open('./index.php?page=9',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=9',"_self")
            </script>
        <?php
        }
    }
?>