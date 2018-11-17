<?php
	require_once("mydb/o-db.php");
	session_start();
	if (array_key_exists("user", $_SESSION)) {
		include("pHeader.php");
	} else {
		include("header.php");
	}
?>

<!-- 
	#D4EDF7
	#347C98
	#C21460
	#FCCB1D
	#34091C
 -->
<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
	<div>
		<?php 
				if (isset($_GET['pageaccess'])) {
					if ($_GET['pageaccess'] == 'forbidden') {
						echo '
						<div class="alert alert-warning" role="alert" style="text-align: center;">
							This page is forbidden
						</div>';
					}
				}
				if (isset($_GET['logout'])) {
					if ($_GET['logout'] == 'success') {
						echo '
						<div class="alert alert-warning" role="alert" style="text-align: center;">
							You are logged out of your account
						</div>';
					}
				}
				if (isset($_GET['login'])) {
					if ($_GET['login'] == 'fail') {
						echo '
						<div class="alert alert-warning" role="alert" style="text-align: center;">
							Failed to sign in, Username or Password is incorrect
						</div>';
					}
				}
			?>
	</div>
	<div>
		<h3 style="text-align: center;">Welcome to</h3>
		<h1 style="text-align: center;">KEN'S CARS</h1>
	</div>
	<div class="" style="">
		<div style="text-align: center; padding-bottom: 20px;">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>


				<div class="carousel-inner" style="padding-top: 20px;">
					<div class="carousel-item active">
						<img class="d-block text-center" style="width: auto; height: 500px; left: 50%; right: 50%; margin: 0 auto;" src="./img/Cars/BMW/BMW-i8-Hybrid-Electric-Car.jpg" alt="BMW-i8-Hybrid-Electric-Car">
					</div>
					<div class="carousel-item">
						<img class="d-block" style="width: auto; height: 500px; left: 50%; right: 50%; margin: 0 auto;" src="./img/Cars/Lambo/241408.jpg" alt="Lambo hybrid">
					</div>
					<div class="carousel-item">
						<img class="d-block" style="width: auto; height: 500px; left: 50%; right: 50%; margin: 0 auto;" src="./img/Cars/Tesla/red-tesla-roadster-palo-alto-hq-21-e1518767661943.jpg" alt="Tesla Roadsta">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</section>

<script>
	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {slideIndex = 1} 
	if (n < 1) {slideIndex = x.length} ;
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none"; 
	}
	x[slideIndex-1].style.display = "block"; 
}
</script>

<?php
	include("footer.php");
?>