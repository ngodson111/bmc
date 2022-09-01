<?php
    //INSERT OPERATION
    if(isset($_POST['teacherbtn'])) {
        $obj = new query();

        $name = $obj->FilterString($_POST['name']);
        $position = $obj->FilterString($_POST['position']);

        $feducation = $obj->FilterString($_POST['education']);
        $education = $obj->RemoveWhiteSpace($feducation);

        $freview = $obj->FilterString($_POST['review']);
        $review = $obj->RemoveWhiteSpace($freview);

        //IMAGE
        $file = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $filetempname = $_FILES['image']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/teacher/" . $filenewname;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('name' => $name, 'position' => $position, 'image' => $filenewname, 'review' => $review, 'education' => $education);
            $result2 = $obj->InsertData('teacher',$array); // SENDING DYNAMIC PARAMETERS
          
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
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php?page=10',"_self")
              </script>
            <?php
        }
    }
?>