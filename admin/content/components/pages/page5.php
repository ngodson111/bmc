<?php include("./php/inserttestimonials.php"); ?>
<?php include("./php/viewtestimonials.php"); ?>
<?php include("./php/deletetestimonials.php"); ?>
<?php include("./php/updatetestimonial.php"); ?>

<div class="mt-5" id="page5" style="display:none;">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Testimonials</span>
            </div>
            <div class="add" data-toggle="modal" data-target="#addtestimonials">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="testimonialsdatas">
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
                        if(count($alltestimonials) > 0) {
                            $counter = 1;
                            $alltestimonials = array_reverse($alltestimonials);
                            foreach($alltestimonials as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['name']; ?></td>
                                        <td><?php echo $item['position']; ?></td>
                                        <td>
                                            <div class="img" style="width:50px;height:50px;border-radius:9px">
                                                <img src="./assets/img/testimonials/<?php echo $item['image']; ?>" alt=""
                                                    style="width:100%;height:100%;object-fit:cover;"
                                                />
                                            </div>
                                        </td>

                                        <td>    
                                            <span class="btn btn-sm btn-info" data-toggle="modal" data-target="#showtestimonials<?php echo $item['uid'] ?>">
                                                <i class="fas fa-eye"></i>
                                            </span> 
                                        </td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="showtestimonials<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                            Details
                                                        </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Review/Testimonial :</b> <?php echo $item['review'] ?>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="float-right btn btn-md btn-dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <td id="testimonialsmoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['inserted']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#testimonialsmoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#testimonialsmoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td>
                                            <button data-toggle="modal" data-target="#updatetestimonials<?php echo $item['uid']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <button data-toggle="modal" data-target="#deletetestimonials<?php echo $item['uid']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                        <!-- UPDATE MODAL -->
                                        <div class="modal fade edittestimonial" id="updatetestimonials<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post">
                                                        <div class="modal-header">
                                                            <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                                Edit Testimonial Details
                                                            </p>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input name="name" type="text" class="testimonial w-100 mb-3" value="<?php echo $item['name']; ?>" placeholder="Edit Full Name">
                                                            <input name="position" type="text" class="testimonial w-100 mb-3" value="<?php echo $item['position']; ?>" placeholder="Edit Position">
                                                            <textarea name="testimonial" class="testimonial w-100 mb-3" placeholder="Testimonial" cols="30" rows="5" required><?php echo $item['review']; ?></textarea>
                                                            <input name="uid" type="text" value="<?php echo $item['uid']; ?>" style="display:none;">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="updatetestimonialbtn" class="testimonial float-right btn btn-md">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DELETE MODAL -->
                                        <div class="modal fade" id="deletetestimonials<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete <?php echo $item['name'] ?>'s testimonial?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>" style="display:none" required>
                                                                <input type="text" name="image" value="<?php echo $item['image']; ?>" style="display:none" required>
                                                                <button name="testimonialsdelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
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
        <div class="modal fade" id="addtestimonials" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Testimonials</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="name" type="text" class="testimonials w-100 mb-3" placeholder="Full Name" required>
                        <input name="position" type="text" class="testimonials w-100 mb-3" placeholder="Position" required>
                        <textarea name="review" class="testimonials w-100 mb-3" placeholder="Review / Message" cols="30" rows="5" required></textarea>
                        <input name="image" type="file" class="w-100 mb-5" required>
                        <button name="testimonialsbtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#testimonialsdatas').DataTable();
        } );
    </script>
</div>
