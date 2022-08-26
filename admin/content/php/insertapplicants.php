<?php
    include "../../php/connect.php";
    include "./mainendpoint.php";
    if(isset($_POST['applicantsbtn'])) {
        $object = new query();

        $name = $object->FilterString($_POST['name']);

        $program = $object->FilterString($_POST['program']);

        $parents = $object->FilterString($_POST['parents']);
        
        $email = $object->FilterString($_POST['email']);
        
        $dob = $object->FilterString($_POST['dob']);

        $phone = $object->FilterString($_POST['phone']);

        $fremark = $object->FilterString($_POST['remark']);
        $remark = $object->RemoveWhiteSpace($fremark);

        if(empty($name) || empty($program) || empty($email) || empty($parents) || empty($dob) || empty($phone) || empty($remark)) {
            ?>
                <script>
                    alert("Fields cannot be empty!");
                    window.open('../../../courses.php',"_self");
                </script>
            <?php
        }

        $array = array( 'name'=> $name, 'program'=> $program, 'parents'=>$parents,'email' => $email,'dob' => $dob, 'phone' => $phone, 'remark' => $remark );
        $insert = $object->InsertData('applicants',$array);

        if($insert == 1) {
            ?>
                <script>
                    alert("Thank your for your interest!");
                    window.open('../../../courses.php',"_self");
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert('Error Occured!');
                    window.open('../../../courses.php',"_self");
                </script>
            <?php
        }
    }
?>