<!DOCTYPE html>
<html lang="en">
<head>
	<title>KEN'S CARS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- image on tab -->
	<link rel="icon" href="./img/logo.jpg">

	<!-- Bootstrap -->
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Style sheet -->
	<link href="./css/stylesheet.css" rel="stylesheet" type="text/css">

	<!-- login stuff -->
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="login/css/util.css">
		<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #26A7BC">
		<a href="index.php"><img src="img/logo.jpg" alt="logo to home page" style="width: 50px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<!-- morgan was here and screw you ahahahahahahaha -->
				<li class="nav-item active">
					<a class="nav-link" href="aboutus.php">About us</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="testdrive.php">Test Drive</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="inventory.php">Inventory</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="signup.php">Sign Up</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div>
					<?php 
						if (isset($_GET['login'])) {
							if ($_GET['login'] == 'fail') {
								echo '
								<div class="alert alert-warning" role="alert" style="text-align: center;">
									User Name Or Password was Incorrect 
								</div>';
							}
						}
					?>
				</div>
				<form class="login100-form validate-form"  action="mydb/login.db.php" method="POST" role="form">
					<span class="login100-form-title p-b-26">
						Login
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" id="username" name="username">
						<span class="focus-input100" data-placeholder="UserName"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="password" name="password">
						<span class="focus-input100" data-placeholder="Password" ></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="signup.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
		<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="login/vendor/bootstrap/js/popper.js"></script>
		<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="login/vendor/daterangepicker/moment.min.js"></script>
		<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="login/js/main.js"></script>

<?php
	include("footer.php");
?>