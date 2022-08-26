<?php include("./php/viewcontacts.php"); ?>
<?php include("./php/updatebsccontacts.php"); ?>
<?php include("./php/updatebbscontacts.php"); ?>
<?php include("./php/updateadmissionimage.php"); ?>
<?php include("./php/updateadmission.php"); ?>

<div class="mt-5" id="page6" style="display:none">
    <div class="container">
        <!-- <div class="row justify-content-between">
            <?php 
                //if(count($allcontacts) > 0) {
                    ?>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-10" id="bsc">
                            <div class="header">
                                <div class="title">
                                    <span>B.Sc Contact</span>
                                </div>
                            </div>
                            <form method="post" class="body mt-3">
                                <div class="location">
                                    <div class="wrap">
                                        <div class="right"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="left"><input name="bsclocation" value="<?php //echo $allcontacts[0]['bsclocation']; ?>" type="text" class="w-100" placeholder="Enter Location" required></div>
                                    </div>
                                </div>
                                <div class="number">
                                    <div class="wrap">
                                        <div class="right"><i class="fas fa-phone"></i></div>
                                        <div class="left"><input name="bscnumber" value="<?php //echo $allcontacts[0]['bscnumber']; ?>" type="text" class="w-100" placeholder="Mobile Number" required></div>
                                    </div>
                                </div>
                                <div class="number">
                                    <div class="wrap">
                                        <div class="right"><i class="fas fa-phone"></i></div>
                                        <div class="left"><input name="bscnumber1" value="<?php //echo $allcontacts[0]['bscnumber1']; ?>" type="text" class="w-100" placeholder="Mobile Number(Optional)"></div>
                                    </div>
                                </div>
                                <div class="button mt-4 mb-3">
                                    <button name="updatebscbtn" class="btn btn-md w-100">Update</button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-10" id="bbs">
                            <div class="header">
                                <div class="title">
                                    <span>BBS/MBS Contact</span>
                                </div>
                            </div>
                            <form method="post" class="body mt-3">
                                <div class="location">
                                    <div class="wrap">
                                        <div class="right"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="left"><input name="bbslocation" value="<?php //echo $allcontacts[0]['bbslocation']; ?>" type="text" class="w-100" placeholder="Enter Location" required></div>
                                    </div>
                                </div>
                                <div class="number">
                                    <div class="wrap">
                                        <div class="right"><i class="fas fa-phone"></i></div>
                                        <div class="left"><input name="bbsnumber" value="<?php //echo $allcontacts[0]['bbsnumber']; ?>" type="text" class="w-100" placeholder="Mobile Number" required></div>
                                    </div>
                                </div>
                                <div class="number">
                                    <div class="wrap">
                                        <div class="right"><i class="fas fa-phone"></i></div>
                                        <div class="left"><input name="bbsnumber1" value="<?php //echo $allcontacts[0]['bbsnumber1']; ?>" type="text" class="w-100" placeholder="Mobile Number(Optional)"></div>
                                    </div>
                                </div>
                                <div class="number">
                                    <div class="wrap">
                                        <div class="right"><i class="fas fa-phone"></i></div>
                                        <div class="left"><input name="bbsnumber2" value="<?php //echo $allcontacts[0]['bbsnumber2']; ?>" type="text" class="w-100" placeholder="Mobile Number(Optional)"></div>
                                    </div>
                                </div>
                                <div class="button mt-4 mb-3">
                                    <button name="updatebbsbtn" class="btn btn-md w-100">Update</button>
                                </div>
                            </form>
                        </div>
                    <?php
                //}
            ?>
        </div> -->
        
            <div class="row mt-3 mb-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-10" id="admission">
                    <div class="header">
                        <div class="title">
                            <span>Admission Popup</span>
                        </div>
                        <div class="add">
                            <form method="post">
                                <?php
                                    if($allcontacts[0]['admission'] == "Yes") {
                                        ?>
                                            <button style="background:none;border:none;font-size:20px;outline:none" name="updatenoadmission"><i class="fas fa-toggle-on mr-3"></i></button>
                                        <?php
                                    }else {
                                        ?>
                                            <button style="background:none;border:none;font-size:20px;outline:none" name="updateyesadmission"><i class="fas fa-toggle-off mr-3"></i></button>
                                        <?php
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                    <form method="post" class="body mt-3" enctype="multipart/form-data">
                        <?php
                                if($allcontacts[0]['admissionimg'] != ""){
                                    ?>
                                        <div class="img">
                                            <img src="./assets/img/<?php echo $allcontacts[0]['admissionimg']; ?>" alt="">
                                            <input type="text" name="deleteoldadmissionimg" value="<?php echo $allcontacts[0]['admissionimg']; ?>" hidden>
                                        </div>
                                    <?php
                                }
                            ?>
                        <div class="button mt-4 mb-3">
                            <input type="file" name="admissionimage" placeholder="Choose Image" class="my-2">
                            <button name="updateadmissionimg" class="btn btn-md w-100">Change</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>