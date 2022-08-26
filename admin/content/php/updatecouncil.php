<?php
    //UPDATE OPERATION
    if(isset($_POST['updatecouncilbtn'])) {
        $obj = new query();

        $title = $obj->filterString($_POST['title']);
        $council = $obj->filterString($_POST['council']);
        $uid = $obj->filterString($_POST['uid']);

        $array = array('title'=>$title,'description' => $council);
        $result2 = $obj->UpdateTable('council',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
            window.open('./index.php?page=8',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=8',"_self")
            </script>
        <?php
        }
    }
?>