<?php
    //UPDATE OPERATION
    if(isset($_POST['updatelinkbtn'])) {
        $obj = new query();

        $title = $obj->filterString($_POST['title']);
        $link = $obj->filterString($_POST['link']);
        $uid = $obj->filterString($_POST['uid']);

        $array = array('title'=>$title,'link' => $link);
        $result2 = $obj->UpdateTable('links',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
            window.open('./index.php?page=11',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=11',"_self")
            </script>
        <?php
        }
    }
?>