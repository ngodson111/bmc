<!-- PASSWORD OBJECT -->
<?php include("./php/changepassword.php"); ?>
<!-- PASSWORD OBJECT -->
<?php include("./backup/php/fetchdb.php"); ?>

<div id="nav">
    <div class="title">
        <span>Dashboard</span>
    </div>
    <div class="admin" data-toggle="modal" data-target="#settings">
        <div class="right mr-3">
            <div class="img">
                <img src="./assets/img/user.png" alt="">
            </div>
        </div>
        <div class="left">
            <div class="name"><?php echo $_SESSION['ipvx-bmc-username'];?></div>
            <div class="id">Admin</div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class=" text-left my-0">
                    <b>Settings</b>
                </p>
                <p class="text-right my-0">
                    <span data-dismiss="modal" style="cursor:pointer;font-size:18px">&times;</span>
                </p>
            </div>
            <div class="modal-body p-0">
                <div class="password mt-3"><a rel="noopener" target="_blank" href="../../index.php"
                        style="text-decoration:none;color:black;">Visit Site</a></div>
                <div data-dismiss="modal" data-toggle="modal" data-target="#password" class="password mt-3">Password
                </div>
                <div data-dismiss="modal" data-toggle="modal" data-target="#backup" class="password mt-3">Backup &
                    Restore</div>
                <div onclick="window.open('../auth/signout.php','_self')" class="signout mt-3 mb-3">Signout</div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="my-0">
                    <span style="cursor:pointer;" data-dismiss="modal" data-toggle="modal" data-target="#settings"><i
                            class="fas fa-chevron-left mr-2"></i></span>
                    <span>Change Password</span>
                </p>
            </div>
            <form method="post" class="modal-body mt-2 mb-3">
                <input name="oldpassword" type="text" class="old w-100 mb-2" placeholder="Old Password" required>
                <input name="newpassword" type="password" class="new w-100 mb-2" placeholder="New Password" required>
                <input name="confirmpassword" type="password" class="confirm w-100 mb-3" placeholder="Confirm Password"
                    required>
                <div class="show mb-3">
                    <input type="checkbox">
                    <span>Show Password</span>
                </div>
                <button name="passwordbtn" class="w-100 btn btn-md">Change</button>
            </form>
        </div>
    </div>
</div>
<!-- BACK UP Modal -->
<div class="modal fade" id="backup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="head px-3 py-3">
                <div class="my-0">
                    <span style="cursor:pointer;" data-dismiss="modal" data-toggle="modal" data-target="#settings"><i
                            class="fas fa-chevron-left mr-2"></i></span>
                    <span>Backup & Restore</span>
                </div>
                <form method="post" class="my-0">
                    <button name="backupbtn" class="float-right btn btn-md">Backup</button>
                </form>
            </div>
            <div class="modal-body">
                <table class="table table-sm-responsive">
                    <thead>
                        <tr>
                            <th>Files</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $mydir = './backup/'; 
                            $myfiles = array_diff(scandir($mydir), array('.','..'));
                            $myfiles = array_reverse($myfiles);
                            if(count($myfiles)>1) {
                                for($i=1;$i<count($myfiles);$i++) {
                                    ?>
                        <tr>
                            <td style="font-size:15px;"><i style="font-weight:600;font-size:19px"
                                    class="fas fa-file-code mr-2"></i><?php echo $myfiles[$i] ?></td>
                            <td style="display:flex;">
                                <a rel="noopener" class="mr-1 btn btn-sm btn-info" download
                                    href="./backup/<?php echo $myfiles[$i]; ?>">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a rel="noopener" class="btn btn-sm btn-danger"
                                    href="./backup/php/deletebackup.php?ipxname=<?php echo $myfiles[$i]; ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                                }
                            }else {
                                ?>
                        <tr>
                            <td colspan="2">No Backup Found Please Refresh.</td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>