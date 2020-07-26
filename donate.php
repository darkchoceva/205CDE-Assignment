<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Donate | weCare</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">

		<link rel="stylesheet" href="css/aos.css">

		<link rel="stylesheet" href="css/ionicons.min.css">

		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">

		
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container-fluid px-lg-5">
				<script>
					function greet(){
						alert("weCare welcome you! Let us give a hand to make a better world :)");
					}
				</script>
				<a class="navbar-brand" href="index.html" onmouseout="greet()">weCare</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
						<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
						<li class="nav-item active"><a href="donate.php" class="nav-link">Donate</a></li>
						<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
							<div class="dropdown-menu">
								<a href="login.php" class="dropdown-item nav-item">Login</a>
								<a href="sign-up.php" class="dropdown-item nav-item">Sign Up</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    <!-- END nav -->
    
		<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/img22.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
					<div class="col-md-9 ftco-animate pb-5 text-center">
						<h2 class="mb-3 bread">Donate To Make A Better World</h2>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Donate <i class="ion-ios-arrow-forward"></i></span></p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section ftco-animate">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-9 mb-3 heading-section text-center ftco-animate">
						<span class="subheading">Donate To Help Others</span>
						<h2 class="mb-4">List Of Organizations For Donation</h2>
					</div>
					<div class="col-md-9 heading-section ftco-animate">
						<table class="table table-sm table-hover table-dark" style="width: 100%">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Organization Name</th>
									<th scope="col">Donation $</th>
									<th scope="col">Person In-Charge</th>
									<th scope="col">Email Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=1');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=1');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_donation']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=1');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_person']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=1');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_email']; ?>
										<?php
										}
									?>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=2');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=2');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_donation']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=2');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_person']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=2');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_email']; ?>
										<?php
										}
									?>
									</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=3');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=3');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_donation']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=3');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_person']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=3');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_email']; ?>
										<?php
										}
									?>
									</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=4');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=4');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_donation']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=4');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_person']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=4');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_email']; ?>
										<?php
										}
									?>
									</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=5');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=5');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_donation']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=5');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_person']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=5');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_email']; ?>
										<?php
										}
									?>
									</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=6');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=6');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_donation']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=6');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_person']; ?>
										<?php
										}
									?>
									</td>
									<td>
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=6');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_email']; ?>
										<?php
										}
									?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-animate" style="background-color: #ffa700;">
			<div class="container">
				<div class="row justify-content-center pb-1">
					<div class="col-md-10 heading-section text-center ftco-animate">
						<h2 class="mb-4">How To Donate?</h2>
						<p style="color: white;">Follow the step-by-step below.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 pl-lg-5 py-1">
						<div class="py-md-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<h4 class="mb-4 font-weight-bold">Step 1: Choose An Organization</h4>
									<p style="color: white; font-size: 14px;">From the list of organizations stated above, donors are required to choose an organization which they wish to donate to.</p>
								</div>
								<div class="col-md-12 mb-3 heading-section ftco-animate">
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen charity: water Organization.');">
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=1');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen E-charity Organization.');">
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=2');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen globalLove Organization.');">
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=3');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</button>
								</div>
								<div class="col-md-12 mb-3 heading-section ftco-animate">
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen betterUs Organization.');">
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=4');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen red nose Organization.');">
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=5');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen WorldCare Organization.');">
									<?php
										$db = mysqli_connect('localhost', 'root', '', 'weCare');
										$query1 = mysqli_query($db, 'SELECT * FROM organization WHERE organize_id=6');
										while ($row = mysqli_fetch_array($query1)) {
										?>
										<?php echo $row['organize_name']; ?>
										<?php
										}
									?>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 pl-lg-5 py-1">
						<div class="py-md-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<h4 class="mb-4 font-weight-bold">Step 2: Your Monthly Donation</h4>
								</div>
								<div class="col-md-12 mb-3 heading-section ftco-animate">
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen to donate RM50.');">RM50</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen to donate RM80.');">RM80</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen to donate RM100.');">RM100</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen to donate RM150.');">RM150</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen to donate RM200.');">RM200</button>
								</div>
								<div class="col-md-12 mb-3 heading-section ftco-animate">
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen to donate RM500.');">RM500</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="alert('You have chosen to donate RM1000.');">RM1000</button>
									<button class="btn btn-black py-3 px-4" style="border-radius: 15px;" onclick="others()">Others</button>
									<script>
										function others(){
											var amount = parseInt(prompt("Enter an amount that you wish to donate to the chosen organization (in RM): "));
											while (amount <= 0){
												var amount = parseInt(prompt("Enter an amount that you wish to donate to the chosen organization (in RM): "));
												alert("Chosen amount with RM" + amount + " successfully.");
											}
										}
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center pl-lg-5 py-1">
						<div class="py-md-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<h4 class="mb-4 font-weight-bold">Step 3: Donor's Email</h4>
									<p style="color: white; font-size: 14px;">Please provide us your email address. <br>Therefore, we can send you a confirmation email about your donation.</p>
								</div>
							</div>
							<div class="row justify-content-center pb-1">
								<div class="col-md-10 text-center ftco-animate">
									<div class="py-md-3 pb-md-1">
										<form action="" method="post">
											<div class="input-group" width="100px;">
												<input type="text" style="font-size: 14px;" class="form-control" placeholder="Donor's Email" required>
												<button class="btn btn-black py-2 px-3" style="font-size: 14px;" name="submit">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section ftco-causes">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="causes causes-2 text-center ftco-animate">
							<div class="grow-img img" style="background-image: url(images/img23.jpg);"></div>
							<h2>Clean water for Afica</h2>
							<p>Some of the areas in Africa are having dirty water for their daily life such as drinking, cook for meals and for shower.</p>
							<div class="goal">
								<p><span>$2,320</span> to go</p>
								<div class="progress" style="height:20px">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%; height:20px">70%</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="causes causes-2 text-center ftco-animate">
							<div class="grow-img img" style="background-image: url(images/img8.jpg);"></div>
							<h2>Home for Asia Children</h2>
							<p>Home is a shelter or an accommodation for everyone. There are children who are homeless and they stay anywhere with the suffer of coldness and hotness.</p>
							<div class="goal">
								<p><span>$5,000</span> to go</p>
								<div class="progress" style="height:20px">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%; height:20px">50%</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="causes causes-2 text-center ftco-animate">
							<div class="grow-img img" style="background-image: url(images/img13.jpg);"></div>
							<h2>Education for Asian School</h2>
							<p>In some Asian countries, poor people couldn't afford to pay for the fees for schools. Therefore, the kids started working for their families for wages without a minimum education level.</p>
							<div class="goal">
								<p><span>$6,470</span> to go</p>
								<div class="progress" style="height:20px">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%; height:20px">40%</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="causes causes-2 text-center ftco-animate">
							<div class="grow-img img" style="background-image: url(images/causes-4.jpg);"></div>
							<h2>Poverty in Indonesia</h2>
							<p>The people we meet from the other groups are like us: they live in poverty and they want better lives. Getting together is a good opportunity to see what all of us can do.</p>
							<div class="goal">
								<p><span>$1,800</span> to go</p>
								<div class="progress" style="height:20px">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%; height:20px">70%</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="causes causes-2 text-center ftco-animate">
							<div class="grow-img img" style="background-image: url(images/causes-5.jpg);"></div>
							<h2>Water Supply for Haiti</h2>
							<p>Over the past five years, USAID commissioned six independent evaluations to take a close look at the legacy of USAID–funded water, sanitation, and hygiene (WASH) activities across the globe.</p>
							<div class="goal">
								<p><span>$2,555</span> to go</p>
								<div class="progress" style="height:20px">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%; height:20px">75%</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="causes causes-2 text-center ftco-animate">
							<div class="grow-img img" style="background-image: url(images/img12.jpg);"></div>
							<h2>Schooling for Children in Arab</h2>
							<p>Less than half of Arab's children between the age 6 and 14 go to school. A little over one-third of all children who enroll in grade one reach grade eight. At least 35 million children aged 6 - 14 years do not attend school.</p>
							<div class="goal">
								<p><span>$7,086</span> to go</p>
								<div class="progress" style="height:20px">
									<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%; height:20px">40%</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="ftco-footer ftco-section" style="background-color: #ffa500;">
			<div class="container">
				<div class="row mb-1">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">weCare</h2>
							<p>Kindness of yours is someone's hope.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
								<li class="ftco-animate"><a href="https://twitter.com/covcampus?lang=en"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="https://www.facebook.com/iicp.careerservices"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="https://www.instagram.com/inti_edu/"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Information</h2>
							<ul class="list-unstyled">
								<li><a href="services.php" class="py-2 d-block">Services</a></li>
								<li><a href="donate.php" class="py-2 d-block">Donate</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Links</h2>
							<ul class="list-unstyled">
								<li><a href="index.html" class="py-2 d-block">Home</a></li>
								<li><a href="about.html" class="py-2 d-block">Who we are</a></li>
								<li><a href="blog.html" class="py-2 d-block">Blog</a></li>
								<li><a href="contact.html" class="py-2 d-block">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Contact Us</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon icon-map-marker"></span><span class="text">1-Z, Lebuh Bukit Jambul, Bukit Jambul, 11900 Bayan Lepas, Pulau Pinang</span></li>
									<li><span class="icon icon-phone"></span><span class="text">1-300-88-8123</span></li>
									<li><span class="icon icon-envelope"></span><span class="text">weCare@gmail.com</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<button class="open-button" onclick="openChatForm()">weCare's chat</button>
				<div class="chat-popup" id="chatForm">
					<form action="" name="chatMsg" class="form-container" method="post" onsubmit="sendChat">
						<h6>Anything we can help you?</h6>
						<textarea placeholder="Type message.." name="msg" required></textarea>
						<button type="submit" class="btn" onclick="sendChat()">Send Message</button>
						<button type="button" class="btn cancel" onclick="closeChatForm()">Close</button>
					</form>
				</div>
				<script>
					function openChatForm() {
						document.getElementById("chatForm").style.display = "block";
					}
					function sendChat(){
						var msg = document.chatMsg.msg.value;  
						if (mg == null || msg == ""){  
							alert("Please fill in your message.");  
							return false;  
						}
						alert('Thanks for sending us message. We have received it, please be patient and we will reply you soon.');
					}
					function closeChatForm() {
						document.getElementById("chatForm").style.display = "none";
					}
				</script>
				<div class="row">
					<div class="col-md-12 text-center">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
    
	</body>
</html>