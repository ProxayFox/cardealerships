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
	#EAE7DC
	#D8C3A5
	#8E8D8A
	#E98074
	#E85A4F
 -->
<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
	<div>
		<h1>About KEN'S CARS</h1>
		<p>Hi  this  is  Ken Nichols,  I’ve  been a cars  sales  professional  for over  20+ years.  With that in mind as a customer, you in most cases only purchase a vehicle every 5 to 10 years. So when you go to the dealership, guess who has the advantage in the process.  That is where I come in, to help you thru the steps to take away the hassle sometimes associated with buying a vehicle…!  I will get exactly the vehicle, that  you are looking for with all your options… I will provide to you the exact $$$ amount out the door including all the rebates, taxes and all additional fees….!   (  No Trade Only  ) The number that I quote you will be the number at the dealership, when you inspect the vehicle that you requested before taking delivery… In some cases, time permitting I will meet with you at the dealership… If you have a Trade-In, then that changes everything, and I will need to explain how that works on our first contact… I will provide the exact pricing like I explained, but just have to work around the trade-in.  Like we can estimate the trade-in value for estimated numbers, but your vehicle will need to be inspected and test driven by the used car mgr. 2 get the real trade-in number, known as Actual Cash Value. AVC…!  I have  always  cared  for  my  customers  Honesty.   Always worked with this motto:  Treat my customers the way that I would like to be  Treated.  The same even if I was selling a vehicle to my Brother..Please don’t  hesitate  to contact me for any questions or help regarding anything about purchasing a vehicle…!!!</p>	
	</div>
	<div>
		<h1>Location</h1>
		<h3>2443 US Highway 70 West Goldsboro NC 27530</h3>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.943929950262!2d-78.23490198474671!3d35.48093108024156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac0dba69ea8d57%3A0xcb100c34a74bee12!2s2443+US+Hwy+70+E%2C+Princeton%2C+NC+27569%2C+USA!5e0!3m2!1sen!2sau!4v1539475394259" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
	</div>
</section>

<?php
	include("footer.php");
?>