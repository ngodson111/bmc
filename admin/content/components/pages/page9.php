<?php include("./php/insertevent.php"); ?>
<?php include("./php/viewevent.php"); ?>
<?php include("./php/deleteevent.php"); ?>
<?php include("./php/updateevent.php"); ?>

<div class="mt-5" id="page9" style="display:none;">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Event Board</span>
            </div>
            <div class="add" data-toggle="modal" data-target="#addevent">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="eventdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($allevent) > 0) {
                            $counter = 1;
                            $allevent = array_reverse($allevent);
                            foreach($allevent as $item) {
                                ?>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $item['title']; ?></td>
                        <td>
                            <div class="img" style="width:50px;height:50px;border-radius:9px">
                                <img src="./assets/img/event/<?php echo $item['image']; ?>" alt=""
                                    style="width:100%;height:100%;object-fit:cover;" />
                            </div>
                        </td>

                        <td>
                            <span class="btn btn-sm btn-info" data-toggle="modal"
                                data-target="#showevent<?php echo $item['uid'] ?>">
                                <i class="fas fa-eye"></i>
                            </span>
                        </td>
                        <!-- MODAL -->
                        <div class="modal fade" id="showevent<?php echo $item['uid'] ?>" tabindex="1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                            Details
                                        </p>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-left" style="font-size:17px;">
                                            <b>Event Description :</b> <?php echo $item['description'] ?>.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal"
                                            class="float-right btn btn-md btn-dark">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <td id="eventmoment<?php echo $item['uid'] ?>">
                            <?php echo $item['inserted']; ?>
                        </td>
                        <!-- SCRIPT FOR MOMENT JS -->
                        <script>
                        document.querySelector('#eventmoment<?php echo $item['uid'] ?>')
                            .innerText = moment(document.querySelector('#eventmoment<?php echo $item['uid'] ?>')
                                .innerText).fromNow();
                        </script>

                        <td>
                            <button data-toggle="modal" data-target="#editevent<?php echo $item['uid']; ?>"
                                class="btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                            <button data-toggle="modal" data-target="#deleteevent<?php echo $item['uid']; ?>"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                        <!-- UPDATE MODAL -->
                        <div class="modal fade editevent" id="editevent<?php echo $item['uid'] ?>" tabindex="1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="post">
                                        <div class="modal-header">
                                            <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                Edit Event Details
                                            </p>
                                        </div>
                                        <div class="modal-body">
                                            <input name="title" type="text" class="event w-100 mb-3"
                                                value="<?php echo $item['title']; ?>" placeholder="Edit Title">
                                            <textarea name="event" class="event w-100 mb-3"
                                                placeholder="Remark / Event" cols="30" rows="5"
                                                required><?php echo $item['description']; ?></textarea>
                                            <input name="uid" type="text" value="<?php echo $item['uid']; ?>"
                                                style="display:none;">
                                        </div>
                                        <div class="modal-footer">
                                            <button name="updateeventbtn"
                                                class="event float-right btn btn-md">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- DELETE MODAL -->
                        <div class="modal fade" id="deleteevent<?php echo $item['uid'] ?>" tabindex="1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p class="text-right">
                                            <span data-dismiss="modal"
                                                style="font-size:20px;cursor:pointer;">&times;</span>
                                        </p>
                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                            Are you sure you want to delete this Event?
                                        </p>
                                        <form method="post">
                                            <p class="text-right">
                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>"
                                                    style="display:none" required>
                                                <input type="text" name="image" value="<?php echo $item['image']; ?>"
                                                    style="display:none" required>
                                                <button name="eventdelbtn" class="btn btn-md btn-danger text-white"><i
                                                        class="fas fa-trash-alt"></i></button>
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
        <div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Event</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="title" type="text" class="event w-100 mb-3" placeholder="Event Title" required>
                        <textarea name="event" class="event w-100 mb-3" placeholder="Remark / Event" cols="30" rows="5"
                            required></textarea>
                        <input name="image" type="file" class="w-100 mb-5" required>
                        <button name="eventbtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#eventdatas').DataTable();
    });
    </script>
</div>