<?php
    //UPDATE OPERATION
    if(isset($_POST['updategallerybtn'])) {
        $obj = new query();

        $title = $obj->filterString($_POST['title']);
        $remark = $obj->filterString($_POST['remark']);
        $uid = $obj->filterString($_POST['uid']);

        $array = array('title'=>$title,'remark' => $remark);
        $result2 = $obj->UpdateTable('gallery',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
            window.open('./index.php?page=4',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=4',"_self")
            </script>
        <?php
        }
    }
?>