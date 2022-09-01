<?php include("./php/insertteacher.php"); ?>
<?php include("./php/viewteacher.php"); ?>
<?php include("./php/deleteteacher.php"); ?>
<?php include("./php/updateteacher.php"); ?>
 
<div class="mt-5" id="page10" style="display:none;">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Faculty Members</span>
            </div>
            <div class="add" data-toggle="modal" data-target="#addteacher">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="teacherdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>Review</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($allteacher) > 0) {
                            $counter = 1;
                            $allteacher = array_reverse($allteacher);
                            foreach($allteacher as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['name']; ?></td>
                                        <td><?php echo $item['position']; ?></td>
                                        <td>
                                            <div class="img" style="width:50px;height:50px;border-radius:9px">
                                                <img src="./assets/img/teacher/<?php echo $item['image']; ?>" alt=""
                                                    style="width:100%;height:100%;object-fit:cover;"
                                                />
                                            </div>
                                        </td>

                                        <td>    
                                            <span class="btn btn-sm btn-info" data-toggle="modal" data-target="#showteacher<?php echo $item['uid'] ?>">
                                                <i class="fas fa-eye"></i>
                                            </span> 
                                        </td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="showteacher<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                            Details
                                                        </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Education :</b> <?php echo $item['education'] ?>. <br>
                                                            <b>Review/Description :</b> <?php echo $item['remark'] ?>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="float-right btn btn-md btn-dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <td id="teachermoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['inserted']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#teachermoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#teachermoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td>
                                            <button data-toggle="modal" data-target="#updateteacher<?php echo $item['uid']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <button data-toggle="modal" data-target="#deleteteacher<?php echo $item['uid']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                        <!-- UPDATE MODAL -->
                                        <div class="modal fade editteacher" id="updateteacher<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <form method="post">
                                                        <div class="modal-header">
                                                            <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                                Edit Teacher Details
                                                            </p>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input name="name" type="text" class="teacher w-100 mb-3" value="<?php echo $item['name']; ?>" placeholder="Edit Full Name">
                                                            <input name="position" type="text" class="teacher w-100 mb-3" value="<?php echo $item['position']; ?>" placeholder="Edit Position">
                                                            <textarea name="education" class="teacher w-100 mb-3" placeholder="Education" cols="30" rows="3" required><?php echo $item['education']; ?></textarea>
                                                            <textarea name="remark" class="teacher w-100 mb-3" placeholder="Remark" cols="30" rows="5" required><?php echo $item['remark']; ?></textarea>
                                                            <input name="uid" type="text" value="<?php echo $item['uid']; ?>" style="display:none;">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="updateteacherbtn" class="teacher float-right btn btn-md">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DELETE MODAL -->
                                        <div class="modal fade" id="deleteteacher<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete <?php echo $item['name'] ?>'s details?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>" style="display:none" required>
                                                                <input type="text" name="image" value="<?php echo $item['image']; ?>" style="display:none" required>
                                                                <button name="teacherdelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                <?php
                                $counter++;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addteacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Faculty Member</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="name" type="text" class="teacher w-100 mb-3" placeholder="Full Name" required>
                        <input name="position" type="text" class="teacher w-100 mb-3" placeholder="Position" required>
                        <textarea name="education" class="teacher w-100 mb-3" placeholder="Education" cols="30" rows="3" required></textarea>
                        <textarea name="review" class="teacher w-100 mb-3" placeholder="Review / Message" cols="30" rows="5" required></textarea>
                        <input name="image" type="file" class="w-100 mb-5" required>
                        <button name="teacherbtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#teacherdatas').DataTable();
        } );
    </script>
</div>
