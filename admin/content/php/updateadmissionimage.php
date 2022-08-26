<?php
    //INSERT OPERATION
    if(isset($_POST['updateadmissionimg'])) {
        $obj = new query();

        //IMAGE
        $file = $_FILES['admissionimage'];
        $filename = $_FILES['admissionimage']['name'];
        $filetempname = $_FILES['admissionimage']['tmp_name'];
        $filenewname = uniqid(true). '.' . explode('.', $filename)[1];

        $filedestination = "./assets/img/" . $filenewname;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('admissionimg' => $filenewname);
            $result2 = $obj->UpdateTable('contacts',$array, "1"); // SENDING DYNAMIC PARAMETERS
          
            if($result2 == 1) { //CONCLUDING THE RESULT
                if(isset($_POST['deleteoldadmissionimg']) && $_POST['deleteoldadmissionimg'] != "") {
                    $filetodelete = "./assets/img/" . $_POST['deleteoldadmissionimg'];
                    unlink($filetodelete);
                }
                ?>
                <script>
                    window.open('./index.php?page=6',"_self");
                </script>
                <?php
            }else {
                ?>
                <script>
                    alert("Error Occured!");
                    window.open('./index.php?page=6',"_self");
                </script>
                <?php
            }
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php?page=6',"_self")
              </script>
            <?php
        }
    }
?>