<?php include("./php/insertslider.php"); ?>
<?php include("./php/viewslider.php"); ?>
<?php include("./php/deleteslider.php"); ?>

<div class="mt-5" id="page1">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Slider</span>
            </div>
            <div class="addWrap">
                <div class="add mr-1" data-toggle="modal" data-target="#displaySlider">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="add1" data-toggle="modal" data-target="#addSlider">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="sliderdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($allslider) > 0) {
                            $counter = 1;
                            $allslider = array_reverse($allslider);
                            foreach($allslider as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td>
                                            <div class="img" style="width:50px;height:50px;border-radius:9px">
                                                <img src="./assets/img/slider/<?php echo $item['image']; ?>" alt=""
                                                    style="width:100%;height:100%;object-fit:cover;"
                                                />
                                            </div>
                                        </td>
                                        <td id="slidermoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['inserted']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#slidermoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#slidermoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td><button data-toggle="modal" data-target="#deleteslider<?php echo $item['uid']; ?>" class="btn btn-md btn-danger"><i class="fas fa-trash"></i></button></td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="deleteslider<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete this Slider?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>" style="display:none" required>
                                                                <input type="text" name="image" value="<?php echo $item['image']; ?>" style="display:none" required>
                                                                <button name="sliderdelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
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
        <!-- ADD Modal -->
        <div class="modal fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Slider</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="slider" type="file" class="slider w-100 mb-5" required>
                        <button name="sliderbtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- DISPLAY Modal -->
        <div class="modal fade" id="displaySlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class=" text-left my-0">
                            <b>View Slider</b>
                        </p>
                        <p class="text-right my-0">
                            <span data-dismiss="modal" style="cursor:pointer;font-size:18px">&times;</span>
                        </p>
                    </div>
                    <div class="modal-body mt-2 mb-3">
                        <div id="carouselSliderControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                    if(count($allslider) > 0) {
                                        $counter = 1;
                                        foreach($allslider as $item) {
                                            ?>
                                                <div class="carousel-item mx-auto <?php if($counter == 1) {echo "active";} ?>">
                                                    <img class="d-block w-100" src="./assets/img/slider/<?php echo $item['image']; ?>" alt="First slide">
                                                </div>
                                            <?php
                                            $counter++;
                                        }
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSliderControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSliderControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#sliderdatas').DataTable();
        } );
    </script>
</div>
