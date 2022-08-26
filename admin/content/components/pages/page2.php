<?php include("./php/viewapplicants.php"); ?>
<?php include("./php/deleteapplicants.php"); ?>

<div class="mt-5" id="page2" style="display:none">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Applicants</span>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="applicantsdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Details</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($allapplicants) > 0) {
                            $counter = 1;
                            $allapplicants = array_reverse($allapplicants);
                            foreach($allapplicants as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['name']; ?></td>
                                        <td><a href="mailto:<?php echo $item['email']; ?>"><?php echo $item['email']; ?></a></td>
                                        <td><a href="tel:<?php echo $item['phone']; ?>"><?php echo $item['phone']; ?></a></td>
                                        <td>    
                                            <span class="btn btn-md btn-info" data-toggle="modal" data-target="#showapplicants<?php echo $item['uid'] ?>">
                                                <i class="fas fa-eye"></i>
                                            </span> 
                                        </td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="showapplicants<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                            Applicants Details
                                                        </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Application For :</b> <?php echo $item['program'] ?>
                                                        </p>
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Guardian Name :</b> <?php echo $item['parents'] ?>
                                                        </p>
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Date Of Birth :</b> <?php echo $item['dob'] ?>
                                                        </p>
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Remark :</b> <?php echo $item['remark'] ?>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="float-right btn btn-md btn-dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <td id="applicantsmoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['inserted']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#applicantsmoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#applicantsmoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td><button data-toggle="modal" data-target="#deleteapplicants<?php echo $item['uid']; ?>" class="btn btn-md btn-danger"><i class="fas fa-trash"></i></button></td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="deleteapplicants<?php echo $item['uid'] ?>" tabindex="1" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete <?php echo $item['name'] ?>'s Application?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>" style="display:none" required>
                                                                <button name="applicantsdelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
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
    </div>
    <script>
        $(document).ready(function() {
            $('#applicantsdatas').DataTable();
        } );
    </script>
</div>