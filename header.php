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

	<!-- popper.js -->
	<!-- <script src="/js/popper.js"></script> -->

	<!-- tooltip.js -->
	<!-- <script src="/js/tooltip.js"></script> -->

	<!-- Bootstrao validators -->
	<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
	<!-- <script src="js/bootstrap.js"></script> -->
	<!-- <script src="js/1000hz-bootstrap-validator.js"></script> -->

	<!-- Google recapture -->
	<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
	<!-- <script src="https://www.google.com/recaptcha/api.js?render=6LfVyXAUAAAAAIHbYJ86HpX-Gmn6KrOxd1SYSh6J"></script> -->
	<!-- <script>
	grecaptcha.ready(function() {
			grecaptcha.execute('6LfVyXAUAAAAAIHbYJ86HpX-Gmn6KrOxd1SYSh6J', {action: 'signup.php'}).then(function(token) {
				...
			});
	});
	</script> -->
</head>
<body style="background-color: #748686">
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
			<form class="form-inline my-2 my-lg-0" action="mydb/login.db.php" method="POST" role="form" data-toggle="validator">
				<input type="text" class="form-control mr-sm-2" placeholder="Enter Username" id="username" name="username" required>
				<input type="password" class="form-control mr-sm-2" placeholder="Enter Password" id="password" name="password" required>
				<button class="btn btn-primary my-2 my-sm-0" type="submit">Login</button>
			</form>
		</div>
	</nav>