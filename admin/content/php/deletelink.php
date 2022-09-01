<?php
    //DELETE OPERATION
    if(isset($_POST['linkdelbtn'])) {
        $obj = new query();

        //DELETE DATA
        $filteredId = $obj->FilterString($_POST['uid']);

        $delete = new query(); //CALLING CLASS
        $result3 = $delete->DeleteData('links', $filteredId); //SENDING DYNAMIC PARAMETERS

        if($result3 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                window.open('./index.php?page=11',"_self")
            </script>
            <?php
        }else {
        ?>
            <script>
            alert('Error!');
            window.open('./index.php?page=11',"_self");
            </script>
        <?php
        }
    }
?>