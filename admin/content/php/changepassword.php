<?php
    if(isset($_POST['passwordbtn'])) {
        $object = new query();

        $oldpassword = $object->FilterString($_POST['oldpassword']);
        $newpassword = $object->FilterString($_POST['newpassword']);
        $confirmpassword = $object->FilterString($_POST['confirmpassword']);

        if($newpassword !== $confirmpassword) {
            ?>
                <script>
                    alert('Please Confirm Your New Password');
                    window.open('./index.php?page=1',"_self");
                </script>
            <?php
        }else {

            $olddata = $object->RetriveData('auth');
            if($object->VerifyString($oldpassword,$olddata[0]['password']) == true) {
                
                $hashedpassword = $object->HashString($newpassword);

                $array = array('password' => $hashedpassword );
                
                $update = $object->UpdateTable('auth',$array,1);

                if($update == 1) {
                    ?>
                        <script>
                            window.open('../auth/signout.php',"_self");
                        </script>
                    <?php
                }else {
                    ?>
                        <script>
                            alert('Error Occured!');
                            window.open('./index.php?page=1',"_self");
                        </script>
                    <?php
                }
            }else {
                ?>
                    <script>
                        alert('Please Verify Your Old Password');
                        window.open('./index.php?page=1',"_self");
                    </script>
                <?php
            }
        }
    }
?>