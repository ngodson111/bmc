<?php
    //UPDATE OPERATION
    if(isset($_POST['updatenoticebtn'])) {
        $obj = new query();

        $title = $obj->filterString($_POST['title']);
        $notice = $obj->filterString($_POST['notice']);
        $uid = $obj->filterString($_POST['uid']);

        $array = array('title'=>$title,'description' => $notice);
        $result2 = $obj->UpdateTable('notice',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
            window.open('./index.php?page=3',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=3',"_self")
            </script>
        <?php
        }
    }
?>