<!DOCTYPE html>
<html lang="en">
<head>
	<title>KEN'S CARS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- immage on tab -->
	<link rel="icon" href="./img/logo.jpg">

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

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
				<li class="nav-item active">
					<a class="nav-link" href="aboutus.php">About us</a>
				</li>

				<li class="nav-item active">
					<a class="nav-link " href="inventory.pro.php">Inventory</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="savedcar.pro.php">Saved Cars</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="testdrive.pro.php">Test Drive</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="profile.pro.php">Profile</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" action="mydb/logout.db.php" method="POST" role="form" data-toggle="validator">
				<h3 style="padding-right: 20px;"><?php echo $_SESSION['user'];?></h3>
				<button class="btn btn-primary my-2 my-sm-0" type="submit">Logout</button>
			</form>
		</div>
	</nav>