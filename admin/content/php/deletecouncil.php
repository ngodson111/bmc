<?php
    //DELETE OPERATION
    if(isset($_POST['councildelbtn'])) {
        $obj = new query();

        //DELETE DATA
        $filteredId = $obj->FilterString($_POST['uid']);
        $imagename = $_POST['image'];

        //UNLINK IMAGE
        $one = "./assets/img/council/".$imagename;
        unlink($one);

        $delete = new query(); //CALLING CLASS
        $result3 = $delete->DeleteData('council', $filteredId); //SENDING DYNAMIC PARAMETERS

        if($result3 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                window.open('./index.php?page=8',"_self")
            </script>
            <?php
        }else {
        ?>
            <script>
            alert('Error!');
            window.open('./index.php?page=8',"_self");
            </script>
        <?php
        }
    }
?>