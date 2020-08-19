<?php 
    include 'sessiontest.php'; 

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Education</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	  <header id="header" id="home">
		  <div class="header-top">
			  <div class="container">
				  <div class="row">
					  <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
						  <a href="tel:010 6754 9333"><span class="lnr lnr-phone-handset"></span> <span class="text">010 6754 9333</span></a>
						  <a href="mailto:10133jhg@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">10133jhg@gmail.com</span></a>
					  </div>
				  </div>
			  </div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
			  <div id="logo">
				<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			  </div>
			  <nav id="nav-menu-container">
				<ul class="nav-menu">
                  <li><a href="index.html">강의 보기</a></li>
                  <li><a href="index.html">게시판</a></li>
				</ul>
			  </nav><!-- #nav-menu-container -->
			</div>
		</div>
      </header><!-- #header -->
      
            <!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								<?php echo($_SESSION['uid']); ?>님 환영합니다.
                            </h1>	
                            <p class="text-white link-nav"> 
								<?php 
								at($_SESSION['uid']);
								?>
							</p>
                        </div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start gallery Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/video.png" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<a href="event-details.html"><h4>강의 바로 보기</h4></a>
									<p>
										업로드된 강의를 보러갑니다.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/board.png" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<a href="event-details.html"><h4>게시글 보러가기</h4></a>
									<p>
										과목별 게시글을 보러 갑니다.
									</p>
								</div>
							</div>
						</div>	
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Information</h4>
								<ul>
									<li><a href="#">contact</a></li>
									<li><a href="#">copyright</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by Jeong HoGyun, Kim GwanSu with <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
    		<script src="js/jquery.tabs.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
