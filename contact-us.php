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
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
	<!-- Main CSS -->
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
	<!--Preload-->
	<?php include_once('includes/header.php');?>
	<!-- end banner -->

	<section class="section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="contact-info text-center wow fadeIn">
						<i class="fa fa-phone-square"></i>
						<h3>Hubungi</h3>
						<p><a href="">017-487 0139 </a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="contact-info text-center wow fadeIn">
						<i class="fa fa-envelope-open-o"></i>
						<h3>Social Media</h3>
						<p><a href="">FB: Maniss SPA Sg.Petani </a><br><a href="">IG: @manisspa_sp</a></p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="contact-info text-center wow fadeIn">
						<i class="fa fa-map-marker"></i>
						<h3>Find Us</h3>
						<p>Maniss Spa Sg.Petani kampung sungai layar, <br>Sungai Petani, Malaysia</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Questions?</span></h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 col-lg-8 offset-lg-2">
					<form id="contactForm" class="contact-form" data-toggle="validator" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input placeholder="First Name" id="fname" class="form-control" name="fname" type="text" required data-error="Please enter your first name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input placeholder="Last Name" id="lname" class="form-control" name="lname" type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input placeholder="Email Address" id="email" class="form-control" name="email" type="email" required data-error="Please enter your valid email address">
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<textarea placeholder="Your Comments" id="message" cols="20" rows="8" class="form-control" required data-error="Please enter your comments"></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="text-center">
							<input value="Send Message" name="submit" class="btn btn-primary" type="submit">
							<div id="msgSubmit" class="hidden"></div>
						</div>
					</form>
				</div>

			</div>

		</div>
	</section>
	<!-- end contact -->



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
