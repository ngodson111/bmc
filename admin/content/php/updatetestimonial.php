<?php
    //UPDATE OPERATION
    if(isset($_POST['updatetestimonialbtn'])) {
        $obj = new query();

        $name = $obj->filterString($_POST['name']);
        $position = $obj->filterString($_POST['position']);
        $testimonial = $obj->filterString($_POST['testimonial']);
        $uid = $obj->filterString($_POST['uid']);

        $array = array('name'=>$name,'position' => $position, 'review' => $testimonial);
        $result2 = $obj->UpdateTable('testimonials',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
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
    }
?>