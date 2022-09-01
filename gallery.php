<?php
	include "./admin/php/connect.php";
	include "./admin/content/php/mainendpoint.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gallery || Butwal Model College</title>
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
									<li>E-mail Address :  bumocol@gmail.com</li>
									<li>Contact Number : 017-429193,429192</li>
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
										<li><a href="index.php">Home</a></li>                                                         
										<li>
											<a href="courses.php">Courses</a>
											<ul class="sub-menu text-left">
												<li><a href="bbm.php">BBA</a></li>
												<li><a href="bhm.php">BHM</a></li>
												<li><a href="mpgd.php">MPGD</a></li>
											</ul>
										</li>
										<li>
											<a href="notice.php">Events & Notices</a>
											<ul class="sub-menu text-left">
												<li><a href="notice.php">Notice</a></li>
												<li><a href="event.php">Event</a></li>
											</ul>
										</li>
										<li class="active">
											<a href="gallery.php">Gallery</a>
											<ul class="sub-menu text-left">
												<li><a href="gallery.php">Images</a></li>
												<li><a href="video.php">Videos</a></li>
											</ul>
										</li>
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
		<!-- page-title-area-start -->
		<!-- <div class="page-title-area ptb-170 bg-opacity-6" style="background-image:url(assets/img/bg/11.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="page-title-text">
							<h2>Gallery</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- page-title-area-end -->
		<!-- gallery-area-start -->
		<div class="gallery-area pt-130 pb-125">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="gallery">
							<?php
								include("./admin/content/php/viewgallery.php");

								if(count($allgallery) > 0) {
									$counter = 1;
									$allgallery = array_reverse($allgallery);
									foreach($allgallery as $item) {
										if($item['mark'] === "image") {
										?>
										<div class="gallery-wrapper" style="position: relative;">
											<div class="gallery-img" style="position: relative;z-index:0;">
												<a href="#">
													<img 
														src="./admin/content/assets/img/gallery/<?php echo $item['image']; ?>" 
														alt="" 
														style="height: 300px; object-fit: cover;"
													/>
												</a>
												<div class="gallery-icon">
													<a class="image-link" href="./admin/content/assets/img/gallery/<?php echo $item['image']; ?>"><span class="ti-search"></span></a>
												</div>
											</div>
											<div 
												class="description" 
												style="
													position: absolute;
													bottom:0;
													left:0;
													right:0;
													padding: 10px;
													z-index: 1;
													background: rgba(0,0,0,0.6);
												"
											>
												<h6 class="upcoming-right text-white"><?php echo explode(" ", $item['inserted'])[0] ?></h6>
												<h4>
													<a href="#" style="font-weight:700;text-decoration: none;color:#fff;">
														<?php echo $item['title'] ?>
													</a>
												</h4>
											</div>
										</div>
										<?php
										}
									}
								}

							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- gallery-area-end -->
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area pt-100 pb-70 bg-opacity-5" style="background-image:url(assets/img/bg/2.jpg)">
				<div class="container">
					<div class="border-bottom">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-12">
								<div class="footer-wrapper mb-30">
									<h2 class="footer-title">About Butwal Model College(BMC)</h2>
									<div class="footer-content">
										<p>Butwal Model College, a co-educationalinstitution, is an educational network ofNew Horizon College & KathmanduModel College affiliated to PokharaUniversity.  </p>
									</div>
									<ul class="footer-link">
										<li><i class="zmdi zmdi-pin"></i>Omstiyaa Rural Municipality-1,Rupandehi</li>
										<li><i class="fa fa-phone"></i>Phone : 017-429193,429192 </li>
										<li><i class="fa fa-envelope"></i>Email : bumocol@gmail.com</li>
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
										<?php
										include("./admin/content/php/viewlink.php");

										if(count($alllink) > 0) {
											$counter = 1;
											$alllink = array_reverse($alllink);
											foreach($alllink as $item) {
												?>
													<li><a target="_blank" href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a></li>
												<?php
											}
										}
										?>
									</ul>
								</div>
							</div>
							<div class="footer-1 col-lg-3 col-md-6 col-12">
								<div class="footer-wrapper mb-30">
									<h2 class="footer-title">Courses</h2>
									<ul class="footer-menu">
										<li><a href="BBM.php">Bachelor in Business Administration</a></li>
										<li><a href="bhm.php">Bachelor in Hotel Manangement</a></li>
										<li><a href="mpgd.php">Master in Population ,Gender and Development</a></li>
										
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
								<p><i class="fa fa-copyright"></i>Copyright, 2022 <a href="#">Bee Advertisment</a></p>
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
    </body>

</html>
