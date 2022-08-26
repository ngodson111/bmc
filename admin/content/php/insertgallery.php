<?php
    //INSERT OPERATION
    if(isset($_POST['gallerybtn'])) {
        $obj = new query();

        $title = $obj->FilterString($_POST['title']);

        $fremark = $obj->FilterString($_POST['remark']);
        $remark = $obj->RemoveWhiteSpace($fremark);

        //IMAGE
        $file = $_FILES['gallery'];
        $filename = $_FILES['gallery']['name'];
        $filetempname = $_FILES['gallery']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/gallery/" . $filenewname;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('title' => $title, 'remark' => $remark, 'image' => $filenewname);
            $result2 = $obj->InsertData('gallery',$array); // SENDING DYNAMIC PARAMETERS
          
            if($result2 == 1) { //CONCLUDING THE RESULT
                ?>
                <script>
                    window.open('./index.php?page=4',"_self")
                </script>
                <?php
            }else {
                ?>
                <script>
                    alert("Error Occured!");
                    window.open('./index.php?page=4',"_self")
                </script>
                <?php
            }
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php?page=4',"_self")
              </script>
            <?php
        }
    }
?>