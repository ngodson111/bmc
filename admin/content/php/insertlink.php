<?php
    //INSERT OPERATION
    if(isset($_POST['linksbtn'])) {
        $obj = new query();

        $title = $obj->FilterString($_POST['title']);

        $flink = $obj->FilterString($_POST['link']);
        $link = $obj->RemoveWhiteSpace($flink);

        $array = array('title' => $title, 'link' => $link);
        $result2 = $obj->InsertData('links',$array); // SENDING DYNAMIC PARAMETERS
        
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