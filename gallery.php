<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Maniss Spa Sg. Petani</title>
	<link rel="shortcut icon" href="img/manis-spa-logo.png" type="image/x-icon">
	<link rel="shortcut icon" href="img/manis-spa-logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Venobox CSS -->
	<link href="css/venobox.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<!--Chosen-->
	<link href="css/chosen.css" rel="stylesheet">
	<!--Time picker-->
	<link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
	<!--Date picker-->
	<link href="css/datepicker.css" rel="stylesheet">
	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
	<!-- Main CSS -->
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	<!--Preload-->
		 <?php include_once('includes/header.php');?>

	<!-- end nav -->
	
	<!-- end banner -->
	
	<section class="section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Maniss gallery</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/1.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/1.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Rawatan Wajah</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/2.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/2.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Suprise Planner</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/10.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/10.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Manicure</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/11.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/11.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Manicure</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/spa.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/spa.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Mandian bunga</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a class="venobox" data-gall="gallery">
							<img src="img/gallery/manistea.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Tea</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/gallery/manisspa2.jpg" class="venobox" data-gall="gallery">
							<img src="img/gallery/manisspa2.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Mandian bunga</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/manisspa.jpg" class="venobox" data-gall="gallery">
							<img src="img/manisspa.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Maniss banner</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/herba.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/herba.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Herba</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a class="venobox" data-gall="gallery">
							<img src="img/services/urut.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Urutan badan</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/customer.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/customer.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Customer</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/eyelash.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/eyelash.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Eyelash</h3>
							</div>
						</a>
					</div>
				</div>
			</div>			
		</div>
	</section>
	<!-- end gallery -->
	
	
	<!-- end appointment -->
	
	<?php include_once('includes/footer.php');?>
	<!-- end footer -->
	
	<!-- Bact to top -->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	

	
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/SmoothScroll.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="mail/js/form-validator.min.js"></script>
	<script src="mail/js/contact-form-script.js"></script>
    <script src="js/script.js"></script>
	
</body>
</html>
