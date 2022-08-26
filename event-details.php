<?php
	include "./admin/php/connect.php";
	include "./admin/content/php/mainendpoint.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Event-details || Butwal Model College</title>
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
										<li><a href="index.php">Home</a></li>                                                         
										<li><a href="courses.php">Courses</a></li>
										<li class="active"><a href="event.php">Event</a></li>
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
		<!-- page-title-area-start -->
		<div class="page-title-area ptb-220 bg-opacity-4" style="background-image:url(assets/img/bg/16.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title-text">
							<h2>Event Details</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- page-title-area-end -->
		<!-- blog-details-area-start -->
		<div class="blog-details-area pt-130 pb-100">
			<div class="container">
				<div class="row flex-column-reverse flex-lg-row">
					<?php
						if(empty($_GET['id'])) {
							?><script>location.href = "event.php"</script><?php
						}
						include("./admin/content/php/viewevent.php");
						if(count($allevent) <= 0) {
							?><script>location.href = "event.php"</script><?php
						}
						$counter = 1;
						$allevent = array_reverse($allevent);
					?>
					<div class="col-lg-3">
						<div class="widget mb-30">
							<h5 class="widget-course-title">Latest Event</h5>
							<ul class="Latest-Blog">
								<?php
									foreach($allevent as $item) {
										if($counter >= 5) break;
											?>
												<li>
													<div class="widget-latest-blog">
														<div class="widget-latest-blog-img">
															<a href="event-details.php?id=<?php echo $item['uid']; ?>">
																<img 
																	src="./admin/content/assets/img/event/<?php echo $item['image']; ?>" 
																	alt="" 
																	style="height: 150px; object-fit: cover;"
																/>
															</a>
															<div class="widget-latest-blog-content">
																<h5><a href="event-details.php?id=<?php echo $item['uid']; ?>"><?php echo $item['title']; ?></a></h5>
																<span><?php echo explode(" ", $item['inserted'])[0]; ?></span>
															</div>
														</div>
													</div>
												</li>
											<?php
										$counter++;
									}
								?>
							</ul>
						</div>
					</div>
					
					<div class="col-lg-9 mb-30">
						<article class="blog-post">
							<?php
								foreach($allevent as $item) {
									if($_GET['id'] === $item['uid']){
										?>
											<div class="blog-content">
												<h2 class="post-title"><?php echo $item['title'] ?></h2>
												<div class="blog-meta">
													<span><?php echo explode(" ", $item['inserted'])[0]; ?></span>
												</div>
												<p> 
													<?php echo $item['description']; ?>
												</p>
											</div>
											<div class="blog-thumb">
												<a href="#"><img src="./admin/content/assets/img/event/<?php echo $item['image']; ?>" alt=""></a>
											</div>
										<?php
									}
								}
							?>
						</article>
					</div>
				</div>
			</div>
		</div>
		<!-- blog-details-area-end -->
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
    </body>

</html>
