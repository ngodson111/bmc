<?php
    //DELETE OPERATION
    if(isset($_POST['sliderdelbtn'])) {
        $obj = new query();

        //DELETE DATA
        $filteredId = $obj->FilterString($_POST['uid']);
        $imagename = $_POST['image'];

        //UNLINK IMAGE
        $one = "./assets/img/slider/".$imagename;
        unlink($one);

        $delete = new query(); //CALLING CLASS
        $result3 = $delete->DeleteData('slider', $filteredId); //SENDING DYNAMIC PARAMETERS

        if($result3 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                window.open('./index.php',"_self")
            </script>
            <?php
        }else {
        ?>
            <script>
            alert('Error!');
            window.open('./index.php',"_self");
            </script>
        <?php
        }
    }
?>