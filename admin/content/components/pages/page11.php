<?php include("./php/insertlink.php"); ?>
<?php include("./php/viewlink.php"); ?>
<?php include("./php/deletelink.php"); ?>
<?php include("./php/updatelink.php"); ?>

<div class="mt-5" id="page11" style="display:none;">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Usefull Links</span>
            </div>
            <div class="add" data-toggle="modal" data-target="#addlinks">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="linksdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($alllink) > 0) {
                            $counter = 1;
                            $alllink = array_reverse($alllink);
                            foreach($alllink as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['title']; ?></td>

                                        <td>    
                                            <a href="<?php echo $item['link']; ?>" target="_blank">Open Link</a>
                                        </td>
                                        <td id="linksmoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['inserted']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#linksmoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#linksmoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td>
                                            <button data-toggle="modal" data-target="#editlinks<?php echo $item['uid']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <button data-toggle="modal" data-target="#deletelinks<?php echo $item['uid']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                        <!-- UPDATE MODAL -->
                                        <div class="modal fade editlinks" id="editlinks<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post">
                                                        <div class="modal-header">
                                                            <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                                Edit Links
                                                            </p>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input name="title" type="text" class="links w-100 mb-3" value="<?php echo $item['title']; ?>">
                                                            <input name="link" type="text" class="links w-100 mb-3" value="<?php echo $item['link']; ?>">
                                                            <input name="uid" type="text" value="<?php echo $item['uid']; ?>" style="display:none;">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="updatelinkbtn" class="links float-right btn btn-md">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DELETE MODAL -->
                                        <div class="modal fade" id="deletelinks<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete this Link?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>" style="display:none" required>
                                                                <button name="linkdelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
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
        <div class="modal fade" id="addlinks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Link</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="title" type="text" class="links w-100 mb-3" placeholder="Link Title" required>
                        <input name="link" type="text" class="links w-100 mb-3" placeholder="Eg: http://example.com" required>
                        <button name="linksbtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#linksdatas').DataTable();
        } );
    </script>
</div>
