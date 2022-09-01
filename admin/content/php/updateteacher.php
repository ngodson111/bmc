<?php
    //UPDATE OPERATION
    if(isset($_POST['updateteacherbtn'])) {
        $obj = new query();

        $name = $obj->filterString($_POST['name']);
        $position = $obj->filterString($_POST['position']);
        $remark = $obj->filterString($_POST['remark']);
        $education = $obj->filterString($_POST['education']);
        $uid = $obj->filterString($_POST['uid']);

        if(empty($name) || empty($position) || empty($remark) || empty($education)) {
            ?>
            <script>
                alert("Fields cannot be empty!");
                window.history.back();
            </script>
        <?php 
        }
        $array = array('name'=>$name,'position' => $position, 'remark' => $remark, 'education' => $education);
        $result2 = $obj->UpdateTable('teacher',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
            window.open('./index.php?page=10',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=10',"_self")
            </script>
        <?php
        }
    }
?>