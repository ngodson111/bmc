<?php include("./php/insertgallery.php"); ?>
<?php include("./php/viewgallery.php"); ?>
<?php include("./php/deletegallery.php"); ?>
<?php include("./php/updategallery.php"); ?>

<div class="mt-5" id="page4" style="display:none;">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Gallery</span>
            </div>
            <div class="add" data-toggle="modal" data-target="#addgallery">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="gallerydatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Remark</th>
                        <th>Image</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($allgallery) > 0) {
                            $counter = 1;
                            $allgallery = array_reverse($allgallery);
                            foreach($allgallery as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['title']; ?></td>

                                        <td>    
                                            <span class="btn btn-sm btn-info" data-toggle="modal" data-target="#showgallery<?php echo $item['uid'] ?>">
                                                <i class="fas fa-eye"></i>
                                            </span> 
                                        </td>
                                        <!-- DETAILS MODAL -->
                                        <div class="modal fade" id="showgallery<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                            Details
                                                        </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Gallery Description :</b> <?php echo $item['remark'] ?>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="float-right btn btn-md btn-dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <td>
                                            <div class="img" style="width:50px;height:50px;border-radius:9px">
                                                <img src="./assets/img/gallery/<?php echo $item['image']; ?>" alt=""
                                                    style="width:100%;height:100%;object-fit:cover;"
                                                />
                                            </div>
                                        </td>
                                        <td id="gallerymoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['inserted']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#gallerymoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#gallerymoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td>
                                            <button data-toggle="modal" data-target="#editgallery<?php echo $item['uid']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <button data-toggle="modal" data-target="#deletegallery<?php echo $item['uid']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                        <!-- UPDATE MODAL -->
                                        <div class="modal fade editgallery" id="editgallery<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post">
                                                        <div class="modal-header">
                                                            <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                                Edit Gallery Details
                                                            </p>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input name="title" type="text" class="gallery w-100 mb-3" value="<?php echo $item['title']; ?>">
                                                            <input name="remark" type="text" class="gallery w-100 mb-3" value="<?php echo $item['remark']; ?>">
                                                            <input name="uid" type="text" value="<?php echo $item['uid']; ?>" style="display:none;">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="updategallerybtn" class="gallery float-right btn btn-md">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DELETE MODAL -->
                                        <div class="modal fade" id="deletegallery<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete this Gallery Image?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>" style="display:none" required>
                                                                <input type="text" name="image" value="<?php echo $item['image']; ?>" style="display:none" required>
                                                                <button name="gallerydelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
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
        <div class="modal fade" id="addgallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Gallery</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="title" type="text" class="gallery w-100 mb-3" placeholder="Image Title" required>
                        <input name="remark" type="text" class="gallery w-100 mb-3" placeholder="Short Remark(11 Words)" required>
                        <input name="gallery" type="file" class="w-100 mb-5" required>
                        <button name="gallerybtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#gallerydatas').DataTable();
        } );
    </script>
</div>
