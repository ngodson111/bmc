<?php
    //DELETE OPERATION
    if(isset($_POST['teacherdelbtn'])) {
        $obj = new query();

        //DELETE DATA
        $filteredId = $obj->FilterString($_POST['uid']);
        $imagename = $_POST['image'];

        //UNLINK IMAGE
        $one = "./assets/img/teacher/".$imagename;
        unlink($one);

        $delete = new query(); //CALLING CLASS
        $result3 = $delete->DeleteData('teacher', $filteredId); //SENDING DYNAMIC PARAMETERS

        if($result3 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                window.open('./index.php?page=10',"_self")
            </script>
            <?php
        }else {
        ?>
            <script>
            alert('Error!');
            window.open('./index.php?page=10',"_self");
            </script>
        <?php
        }
    }
?>