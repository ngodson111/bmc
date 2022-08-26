<?php
    //INSERT OPERATION
    if(isset($_POST['testimonialsbtn'])) {
        $obj = new query();

        $name = $obj->FilterString($_POST['name']);
        $position = $obj->FilterString($_POST['position']);

        $freview = $obj->FilterString($_POST['review']);
        $review = $obj->RemoveWhiteSpace($freview);

        //IMAGE
        $file = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $filetempname = $_FILES['image']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/testimonials/" . $filenewname;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('name' => $name, 'position' => $position, 'image' => $filenewname, 'review' => $review);
            $result2 = $obj->InsertData('testimonials',$array); // SENDING DYNAMIC PARAMETERS
          
            if($result2 == 1) { //CONCLUDING THE RESULT
                ?>
                <script>
                    window.open('./index.php?page=5',"_self")
                </script>
                <?php
            }else {
                ?>
                <script>
                    alert("Error Occured!");
                    window.open('./index.php?page=5',"_self")
                </script>
                <?php
            }
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php?page=5',"_self")
              </script>
            <?php
        }
    }
?>