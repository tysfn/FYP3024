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
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Our Services</span></h2>
						<p>Full service comfort, friendly staff and a relaxing atmosphere will give you an experience that will leave you glowing both inside and out!!!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/salon.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Hair Treatment</a></h3>
							<p>our professional stylist can give you the best advice like knowing the best haircut and treatment for your hair.</p>
							<h3>RM 30</a></h3>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/eyelash.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Eyelash</a></h3>
							<p>For eyelashes that exude sophistication, chicness, and beauty, our salon specializes in crafting stunning looks.</p><br><br>
							<h3>RM 65</a></h3>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/1.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Facial</a></h3>
							<p>Cleanses, exfoliates, and moisturizes your face skin. Specific products, manual manipulation (massage), and in some cases heat or steam are applied, as needed.</p>
							<h3>RM 250</a></h3>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/11.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Manicure</a></h3>
							<p>Our salon can create various nail looks, ranging from natural to vibrant, depending on your nail design and the 
								characteristics of your nails.</p>
								<h3>RM 50</a></h3>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/urut.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Massage</a></h3>
							<p>Our salon provides massages that offer relaxation and rejuvenation, tailored to your preferences and needs.</p><br><br>
							<h3>RM 85</a></h3>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a><img src="img/services/spa.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Flower bath</a></h3>
							<p>Indulge in our flower bathing experience, therapy that uses fresh flowers aromas of fresh flowers.</p><br>
							<h3>RM 100</a></h3>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="contact-us.php" class="btn btn-primary">Contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end services -->
	
	
	 <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big">Pricing</h1>
            <h2 class="mb-4">Our Service Prices</h2>
          </div>
        </div>
          <table class="table table-bordered">
             <thead> 
              <tr> 
                <th>#</th>
                <th>Service Name</th> 
                <th>Service Price(RM)</th>
                <th>Description</th> 
              </tr> 
            </thead> 
            <tbody>
            <?php
              $ret=mysqli_query($con,"select *from  tblservices");
              $cnt=1;
              while ($row=mysqli_fetch_array($ret)) {
            ?>

            <tr>
              <th scope="row"><?php echo $cnt;?></th>
               <td><?php  echo $row['ServiceName'];?></td> 
               <td><?php  echo $row['Cost'];?></td>
               <td><?php  echo $row['description'];?></td>
            </tr>   
            <?php $cnt=$cnt+1; }?>
            </tbody> 
          </table> 
			 </div>
		</section>
		
<!--		service table end-->
	
	
	<?php include_once('includes/footer.php');?>
	<!-- end footer -->
	
	<!-- Bact to top -->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	
	<!-- Appointment Modal -->
    <div class="modal fade modal-vcenter" id="appointment" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>REQUEST AN APPOINTMENT</h2>
                </div>
                <div class="modal-body">
					<form id="reservation-form" method="post" data-toggle="validator">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label> Name*</label>
									<input type="text" id="rfname" class="form-control" name="rfname" required data-error="Please enter your first name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Email*</label>
									<input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Phone*</label>
									<input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
						</div>
						
						<div class="form-group">
							<label>Address</label>
							<input type="text" id="raddress" class="form-control" name="address">
						</div>
						
						
						<div class="form-group">
                            <label>Service</label>
                            <select id="rselect-service" class="select-option" multiple name="service[]">
                                <?php $query=mysqli_query($con,"SELECT * FROM `tblservices`");
								while($row=mysqli_fetch_array($query)){
							?>
                                <option value="<?php echo $row['ID'];?>">
                                    <?php echo $row['ServiceName'];?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Reservation Date*</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
									</div><!-- /.input group -->
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Select Time</label>
                                        <select name="atime" id="services" required="true" class="form-control">
                                            <option value="10:00 am">10:00 am</option>
                                            <option value="11:00 am">11:00 am</option>
                                            <option value="12:00 pm">12:00 pm</option>
                                            <option value="1:00 pm">2:00 pm</option>
                                            <option value="1:00 pm">3:00 pm</option>
                                            <option value="1:00 pm">4:00 pm</option>
                                            <option value="1:00 pm">5:00 pm</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
						</div>
						
						<div class="submit-block text-right">
							<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
							<input value="Submit" name="submit" class="btn btn-primary" type="submit">
						</div>
						
						<div id="msgSubmitRes" class="h3 text-center hidden"></div>
						
					</form>
                </div>
            </div>
        </div>
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
