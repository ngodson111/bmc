<?php
    //INSERT OPERATION
    if(isset($_POST['councilbtn'])) {
        $obj = new query();

        $title = $obj->FilterString($_POST['title']);

        $fcouncil = $obj->FilterString($_POST['council']);
        $council = $obj->RemoveWhiteSpace($fcouncil);

        //IMAGE
        $file = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $filetempname = $_FILES['image']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/council/" . $filenewname;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('title' => $title, 'description' => $council, 'image' => $filenewname);
            $result2 = $obj->InsertData('council',$array); // SENDING DYNAMIC PARAMETERS
          
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
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php?page=8',"_self")
              </script>
            <?php
        }
    }
?>