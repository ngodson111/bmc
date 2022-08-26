<?php
	include "./admin/php/connect.php";
	include "./admin/content/php/mainendpoint.php";
	include "./admin/content/php/viewcontacts.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || Butwal Model College</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
		
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
		
		<!-- ::::::::::::::All CSS Files here :::::::::::::: -->
		<!-- Vendor CSS -->
        <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendors/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/vendors/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/vendors/et-line-icon.css">
        <link rel="stylesheet" href="assets/css/vendors/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/css/vendors/Pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/css/vendors/themify-icons.css">

		<!-- Plugin CSS -->
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/plugins/headline.css">
        <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
        <link rel="stylesheet" href="assets/css/plugins/meanmenu.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        <header>
			<!-- header-top-area-start -->
			<div class="header-top-area gray-bg-1 section-fluid-255">
				<div class="container-fluid">
					<div class="row flex-column flex-md-row justify-content-md-between justify-content-center align-items-center">
						<div class="col-auto">
							<div class="header-left-wrapper">
								<ul class="header-top-text d-flex flex-column flex-md-row justify-content-center">
									<li>E-mail Address : tutoring@mail.com</li>
									<li>Contact Number : +003457289</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- main-menu-area-start -->
			<div class="main-menu-area section-fluid-255">
				<div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col-auto">
							<div class="logo">
								<a href="index.php">
									<img 
										src="assets/img/logo.png" 
										alt="" 
										style="width: 70px; height: 70px;"
									/>
								</a>
							</div>
						</div>
						<div class="col-auto">
							<div class="main-menu text-center">
								<nav>
									<ul>
										<li class="active"><a href="index.php">Home</a></li>                                                         
										<li><a href="courses.php">Courses</a></li>
										<li><a href="event.php">Event</a></li>
										<li><a href="notice.php">Notice</a></li>
										<li><a href="gallery.php">Gallery</a></li>
										<!-- <li><a href="council.php">Council</a></li> -->
										<li><a href="about.php">About</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-12"><div class="mobile-menu"></div></div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
		</header>
		<!-- slider-area-start -->
		<div class="slider-area">
			<div class="slider-active owl-carousel">
				<?php 
					include("./admin/content/php/viewslider.php");
					if(count($allslider) > 0) {
						$counter = 1;
						$allslider = array_reverse($allslider);
						foreach($allslider as $item) {
							?>
								<div class="slider-wrapper pt-215 pb-430 bg-opacity" style="background-image:url(./admin/content/assets/img/slider/<?php echo $item['image']; ?>)">
									<div class="container">
										<div class="row">
											<div class="col-lg-8 col-12">
												<div class="slider-text slider-text-animation">
													<h1>Bone Of Nation Education</h1>
													<div class="slider-info">
														<p>Lorem ipsum consecteadipisicing elit, Im sed do eiusmo magna aliqua. siconsectetur adipisicing elit, seUt enim ad minim.</p>
													</div>
													<a href="courses.php" class="button">Start A Course</a>
												</div>	
											</div>
										</div>						
									</div>
								</div>
							<?php
						}
					}
				?>
			</div>
		</div>
		<!-- slider-area-end -->
		<!-- campus-area-start -->
		<div class="campus-area">
			<div class="container">
				<div class="inner-campus">
					<div class="campus">
						<div class="row">					
							<div class="col-lg-6 col-12 p-0">
								<div class="campus-video-wrapper ptb-180" style="background-image:url(assets/img/campus/1.jpg)" >
									<div class="campus-text text-center">
										<div class="campus-icon">
											<a class="video-popup" href="https://www.youtube.com/watch?v=5IfKTuUH0HU"><i class="fa fa-play"></i></a>
										</div>
										<h4>Take a Video Tour of Our Campus</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-12 p-0">
								<div class="tab-wrapper">
									<div>
									<!-- Nav tabs -->
									<ul class="campus-tab nav">
										<li class="nav-item">
											<button class="nav-link active" data-bs-target="#home" data-bs-toggle="tab">
												<h4>about us</h4>
											</button>
										</li>
										<li class="nav-item">
											<button class="nav-link" data-bs-target="#profile" data-bs-toggle="tab">
												<h4>mission</h4>
											</button>
										</li>
										<li class="nav-item">
											<button class="nav-link" data-bs-target="#messages" data-bs-toggle="tab">
												<h4>vision</h4>
											</button>
										</li>
									</ul>
									</div>					
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home">
											<div class="campus-wrapper">
												<div class="campus-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
													<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididuLorem ipsum dolor siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
													<a href="about.php">read more</a>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="profile">
											<div class="campus-wrapper">
												<div class="campus-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
													<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididuLorem siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
													<a href="about.php">read more</a>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="messages">
											<div class="campus-wrapper">
												<div class="campus-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
													<p>Lorem ipsum dolor sit amet, consectetur adipising elit, eiusmod tempor incididuLorem ipsum dolor siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
													<a href="#">read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- campus-area-end -->
		<!-- courses-area-start -->
		<div class="courses-area pt-130 pb-100">
			<div class="container">
				<div class="section-title mb-45">
					<h4>our courses</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="courses-wrapper mb-30">
							<div class="courses-img">
								<a href="BBM.php"><img src="assets/img/courses/1.jpg" alt="" />
									<span>Management</span>
								</a>
							</div>
							<div class="courses-content">
								<h4><a href="BBM.php">Bachelor in Business Manangement</a></h4>
								<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua.</p>
								<a href="BBM.php">apply now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="courses-wrapper mb-30">
							<div class="courses-img">
								<a href="BBM.php"><img src="assets/img/courses/1.jpg" alt="" />
									<span>Management</span>
								</a>
							</div>
							<div class="courses-content">
								<h4><a href="BBM.php">Bachelor in Business Manangement</a></h4>
								<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua.</p>
								<a href="BBM.php">apply now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="courses-wrapper mb-30">
							<div class="courses-img">
								<a href="BBM.php"><img src="assets/img/courses/1.jpg" alt="" />
									<span>Management</span>
								</a>
							</div>
							<div class="courses-content">
								<h4><a href="BBM.php">Bachelor in Business Manangement</a></h4>
								<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua.</p>
								<a href="BBM.php">apply now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- courses-area-end -->
		<!-- choose-area-start -->
		<div class="choose-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-7 p-0 col-7 col-md">
						<div class="choose-wrapper blue-bg">
							<div class="section-title mb-40 white-text">
								<h4>why choose us</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
							</div>
							<div class="row custom-row">
								<div class="col-md-6 choose-space">
									<div class="choose-content-wrapper mb-50 text-center">
										<div class="choose-categories-img">
											<img src="assets/img/categories/5.png" alt="">
										</div>
										<div class="choose-categories-content">
											<h5>Technology</h5>
											<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 choose-space">
									<div class="choose-content-wrapper mb-50 text-center">
										<div class="choose-categories-img">
											<img src="assets/img/categories/6.png" alt="">
										</div>
										<div class="choose-categories-content">
											<h5>design</h5>
											<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 choose-space">
									<div class="choose-content-wrapper mb-50 text-center">
										<div class="choose-categories-img">
											<img src="assets/img/categories/7.png" alt="">
										</div>
										<div class="choose-categories-content">
											<h5>music</h5>
											<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 choose-space">
									<div class="choose-content-wrapper mb-50 text-center">
										<div class="choose-categories-img">
											<img src="assets/img/categories/8.png" alt="">
										</div>
										<div class="choose-categories-content">
											<h5>languagfe</h5>
											<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-5 p-0 col-md choose-img ptb-100" style="background-image:url(assets/img/bg/1.jpg)"></div>
				</div>
			</div>
		</div>
		<!-- choose-area-end -->
		<!-- news-blog-area-start -->
		<div class="news-blog-area pt-100 pb-100">
			<div class="container">
				<div class="section-title mb-45">
					<h4>notice</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
				<div class="row">
					<?php
						include("./admin/content/php/viewnotice.php");
						if(count($allnotice) > 0) {
                            $counter = 1;
                            $allnotice = array_reverse($allnotice);
							$allnotice = array_slice($allnotice, 0, 3);
                            foreach($allnotice as $item) {
                                ?>
									<div class="col-lg-4 col-md-6 col-12">
										<div class="news-blog-wrapper mb-30">
											<div class="news-blog-img">
												<a href="notice-details.php?id=<?php echo $item['uid']; ?>">
													<img 
														src="./admin/content/assets/img/notice/<?php echo $item['image'] ?>" 
														alt="" 
														style="height: 250px; object-fit: cover;"
													/>
												</a>
											</div>
											<div class="news-blog-content">
												<h4><a href="notice-details.php?id=<?php echo $item['uid']; ?>"><?php echo $item['title']; ?></a></h4>
												<div class="news-blog-meta">
													<span><?php echo explode(" ", $item['inserted'])[0]; ?></span>
												</div>							
												<p><?php echo $item['description']; ?></p>
												<a href="notice-details.php?id=<?php echo $item['uid']; ?>">read more</a>
											</div>
										</div>
									</div>
								<?php
							}
						}
					?>
				</div>
			</div>
		</div>
		<!-- news-blog-area-end -->
		<!-- upcoming-event-area-start -->
		<div class="upcoming-event-area pb-100">
			<div class="container">
				<div class="section-title mb-45">
					<h4>event</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
				<div class="row">
					<?php
						include("./admin/content/php/viewevent.php");

                        if(count($allevent) > 0) {
                            $counter = 1;
                            $allevent = array_reverse($allevent);
							$allevent = array_slice($allevent, 0, 3);
                            foreach($allevent as $item) {
                                ?>
									<div class="col-lg-4 col-md-6 col-12">
										<div class="upcoming-event-wrapper mb-30">
											<div class="upcoming-event-img">
												<a href="event-details.php?id=<?php echo $item['uid']; ?>">
													<img 
														src="./admin/content/assets/img/event/<?php echo $item['image'] ?>" 
														alt="" 
														style="height: 250px; object-fit: cover;"
													/>
												</a>
											</div>
											<div class="upcoming-content">
												<div class="upcoming-info">
													<h6 class="upcoming-right"><?php echo explode(" ", $item['inserted'])[0] ?></h6>
												</div>
												<h4><a href="event-details.php?id=<?php echo $item['uid']; ?>"><?php echo $item['title'] ?></a></h4>
												<p><?php echo $item['description'] ?></p>
											</div>
										</div>
									</div>
								<?php
							}
						}
					?>
				</div>
			</div>
		</div>
		<!-- upcoming-event-area-end -->
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area pt-100 pb-70 bg-opacity-5" style="background-image:url(assets/img/bg/2.jpg)">
				<div class="container">
					<div class="border-bottom">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-12">
								<div class="footer-wrapper mb-30">
									<h2 class="footer-title">About Poralikha</h2>
									<div class="footer-content">
										<p>Lorem ipsum dolor sit cnr adipisicing elit, sed do eiusmod tempor incididuntlabore et dolore magna aliqua. </p>
									</div>
									<ul class="footer-link">
										<li><i class="zmdi zmdi-pin"></i>California Street san Francisco, CA</li>
										<li><i class="fa fa-phone"></i>Phone : +660 256 24857 </li>
										<li><i class="fa fa-envelope"></i>Email : username@email.com,</li>
									</ul>
								</div>
							</div>
							<div class="footer-1 col-lg-3 col-md-6 col-12">
								<div class="footer-wrapper mb-30">
									<h2 class="footer-title">Useful Link</h2>
									<ul class="footer-menu">
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="gallery.php">Gallery</a></li>
										<!-- <li><a href="council.php">Council</a></li> -->
									</ul>
								</div>
							</div>
							<div class="footer-1 col-lg-3 col-md-6 col-12">
								<div class="footer-wrapper mb-30">
									<h2 class="footer-title">Courses</h2>
									<ul class="footer-menu">
										<li><a href="BBM.php">Bachelor in Business Manangement</a></li>
										<li><a href="BBM.php">Bachelor in Business Manangement</a></li>
										<li><a href="BBM.php">Bachelor in Business Manangement</a></li>
										<li><a href="BBM.php">Bachelor in Business Manangement</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12">
								<div class="footer-wrapper mb-30">
									<h2 class="footer-title">Contact With Us :</h2>
									<div class="social-icon">
										<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
										<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
										<a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area-end -->
			<!-- footer-bottom-area-start -->
			<div class="footer-bottom-area bg-opacity-8 ptb-25" style="background-image:url(assets/img/bg/18.jpg)">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="copyright">
								<p><i class="fa fa-copyright"></i>Copyright, 2022 <a href="#">NGodSon</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area-end -->
		</footer>

		
		<!-- ::::::::::::::All JS Files here :::::::::::::: -->
		<!-- Global Vendor JS -->
        <script src="assets/js/vendors/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendors/jquery-migrate-3.3.2.min.js"></script>
        <script src="assets/js/vendors/jquery-ui.min.js"></script>
        <script src="assets/js/vendors/bootstrap.min.js"></script>

        <!--Plugins JS-->
        <script src="assets/js/plugins/headline.js"></script>
		<script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>
        <script src="assets/js/plugins/jquery.counterup.min.js"></script>
        <script src="assets/js/plugins/waypoints.min.js"></script>
        <script src="assets/js/plugins/jquery.parallax-1.1.3.js"></script>
        <script src="assets/js/plugins/owl.carousel.min.js"></script>
        <script src="assets/js/plugins/jquery.meanmenu.js"></script>
        <script src="assets/js/plugins/ajax-mail.js"></script>
        <script src="assets/js/plugins/wow.min.js"></script>
        <script src="assets/js/plugins/jquery.counterup.min.js"></script>
        <script src="assets/js/plugins/jquery.countdown.min.js"></script>

		<!-- Main JS -->
        <script src="assets/js/main.js"></script>

		<?php
			if(count($allcontacts) > 0 && $allcontacts[0]['admission'] !== "No") {
				?>
					<!-- Modal -->
					<div class="modal fade" id="admissionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title" id="exampleModalLabel">Admission Open</h3>
							</div>
							<div class="modal-body p-0 mx-0">
								<img width="100%" height="400px" style="object-fit: contain;" src="./admin/content/assets/img/<?php echo $allcontacts[0]['admissionimg']; ?>" alt="">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" onclick = "$('#admissionModal').modal('hide')">Close</button>
								<button type="button" class="btn btn-primary" onclick="location.href = 'courses.php'">Apply Now</button>
							</div>
							</div>
						</div>
					</div>
					<script>
						$(window).on('load', function() {
							$('#admissionModal').modal('show');
						});
					</script>
				<?php
			}
		?>
		
    </body>

</html>
