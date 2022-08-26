<?php
    //INSERT OPERATION
    if(isset($_POST['sliderbtn'])) {
        $obj = new query();

        //IMAGE
        $file = $_FILES['slider'];
        $filename = $_FILES['slider']['name'];
        $filetempname = $_FILES['slider']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/slider/" . $filenewname ;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('image' => $filenewname);
            $result2 = $obj->InsertData('slider',$array); // SENDING DYNAMIC PARAMETERS
          
            if($result2 == 1) { //CONCLUDING THE RESULT
                ?>
                <script>
                    window.open('./index.php',"_self")
                </script>
                <?php
            }else {
                ?>
                <script>
                    alert("Error Occured!");
                    window.open('./index.php',"_self")
                </script>
                <?php
            }
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php',"_self")
              </script>
            <?php
        }
    }
?>