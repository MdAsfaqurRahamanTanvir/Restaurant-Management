<?php

    include_once("config.php");

    $result = mysqli_query($con, "SELECT * FROM choosefood ORDER BY id ASC");
    $dessert = mysqli_query($con, "SELECT * FROM dessert ORDER BY name ASC");
    $drinks = mysqli_query($con, "SELECT * FROM drinks ORDER BY name ASC");
    $lunch = mysqli_query($con, "SELECT * FROM lunch ORDER BY name ASC");

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/ar.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="images/ar.jpg" alt="IMG-LOGO" data-logofixed="images/ar.jpg">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.html">Home</a>
								</li>

								<li>
									<a href="menu.php">Menu</a>
								</li>

								<li>
									<a href="reservation.php">Reservation</a>
								</li>

								<li>
									<a href="about.html">About</a>
								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>
								
								<li>
									<a href="login.php">Admin/Login</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
					
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

					
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
		<h2 class="tit6 t-center">
			AR Menu
		</h2>
	</section>


	<!-- Main menu -->
	<section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">

	
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					
					
<!--					Driks         -->
                    

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Drinks
						</h3>

						<!-- Item mainmenu -->
						
						<?php 
                         while($drinks_row=$drinks->fetch_assoc()) {
                             
                        
                        ?>
						
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									<?php echo $drinks_row['name']; ?>
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									<?php echo $drinks_row['tk']; ?>
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Lorem ipsum dolor sit amet.
							</span>
						</div>
						
						<?php  } ?>

					</div>
				</div>

				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Dessert
						</h3>

						<!-- Item mainmenu -->
						<?php 
                         while($dessert_row=$dessert->fetch_assoc()) {
                             
                        
                        ?>
						
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									<?php echo $dessert_row['name']; ?>
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									<?php echo $dessert_row['tk']; ?>
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Lorem ipsum dolor sit amet.
							</span>
						</div>
						
						<?php  } ?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Lunch -->
	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Lunch
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Lunch/Beef%20kala%20bhuna.jpg" alt="IMG-MENU"></a>
                        </div>
						

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Beef kala bhuna
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 200
							</span>
						</div>
						
					
						
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Lunch/Chicken%20biriyani.gif" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Chicken biriyani
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
							BDT 180
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Lunch/Chicken%20Curry.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
									Chicken Curry
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
									BDT 150
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Lunch/Hyderabadi%20biriyani.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
							Hyderabadi biriyani
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 155
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Lunch/Mixed%20Vegetable.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Mixed Vegetable
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 75
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Lunch/Rui%20fish%20curry.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Rui fish curry
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 75
							</span>
						</div>
						
						
						
					</div>
					
				</div>
			</div>
		</div>
	</section>


	<!-- Dinner -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Dinner
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Dinner/Arabian%20Kabsa.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Arabian Kabsa
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 300
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Dinner/BEEF-BHUNA.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								BEEF-BHUNA
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 190
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Dinner/Chicken%20Curry.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Chicken Curry
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 210
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Dinner/loitta_shutki%20bhuna.JPG" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								loitta_shutki bhuna
							</a>

							<span class="txt23">
								Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 50
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Dinner/Mixed%20Vegetable.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Mixed Vegetable
							</a>

							<span class="txt23">
								Sed fermentum eros vitae eros
							</span>

							<span class="txt22 m-t-20">
								BDT 50
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="images/Dinner/Plain%20Rice.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Plain Rice
							</a>

							<span class="txt23">
							   Lorem ipsum dolor sit amet.
							</span>

							<span class="txt22 m-t-20">
								BDT 80
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							8th floor, 379 Dream Town, Dhamrai, Dhaka
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							01950896177
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							ar@gmail.com
						</li>
					</ul>

					<!-- - -->
					
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Latest twitter
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@artanvir
						</a>

						<p class="txt14 m-b-18">
							???Life is uncertain.??? .
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							05 April 2019
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@artanvir
						</a>

						<p class="txt14 m-b-18">
							???In wine there is wisdom, in beer there is strength, in water there is bacteria.??? -
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							10 April 2019
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-32">
						Opening Times
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM ??? 11:00 PM
						</li>

						<li class="txt14">
							Every Day
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2019 All rights reserved  |  <i class="fa fa-heart"></i> by <a href="#" target="_blank">AR Tanvir</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>


<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
