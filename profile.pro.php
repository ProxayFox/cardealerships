<?php 
	require_once("mydb/o-db.php");
	session_start();
	if (array_key_exists("user", $_SESSION)) {
		// Do Something
		include("pHeader.php");

		date_default_timezone_set("Australia/Brisbane");
				$d=strtotime("today");
?>


<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
	<h1 style="text-align: center;">Welcome <?php echo $_SESSION['user']; ?>, to your profile</h1>
	<div>
	<div>
		<?php 
			if (isset($_GET['update'])) {
				if ($_GET['update'] == 'success') {
					echo '
					<div class="alert alert-warning" role="alert" style="text-align: center;">
						Thank you for updating your information
					</div>';
				}
			}
			if (isset($_GET['inventory'])) {
				if ($_GET['inventory'] == 'success') {
					echo '
					<div class="alert alert-warning" role="alert" style="text-align: center;">
						Car as been added
					</div>';
				}
			}
			if (isset($_GET['Booking'])) {
				if ($_GET['Booking'] == 'success') {
					echo '
					<div class="alert alert-warning" role="alert" style="text-align: center;">
						Booking has been made, wait to hear back from our staff soon
					</div>';
				}
			}
		?>
	</div>
		<h3>Update Your Profile</h3>
		<a href="upDateProfile.pro.php" class="badge badge-primary">Update Profile</a>
		<br>
		<h3>Book a Test Drive</h3>
		<a href="testdrive.pro.php" class="badge badge-primary">Book a Drive</a>
		<br>
		<h3>Saved cars</h3>
		<a href="savedcar.pro.php" class="badge badge-primary">Saved Cars</a>
			<?php 
				if ($_SESSION["user"] == "admin") { ?>
					<br>
					<div>
						<h3>Add Inventory</h3>
						<a href="addinventory.admin.php" class="badge badge-primary">Add Inventory</a>
					</div>
			<?php } ?>
			<br>
			<br>
			<!-- Bookings -->
				<div>
					<h3><span id="time_span"></span> <?php echo date("Y-m-d", $d) ?></h3>
				</div>
			<br>
			<?php
				$result = myDB::getInstance()->getBookings();
				if ($result != FALSE) {
					while ($row = $result->fetch_row()) {
					 echo '<tr><td>'.$row[2].'</td> <td>'.$row[3].'</td> <td>'.$row[4].'</td><br>';
			?>
			<?php 
				echo '</tr>';
				} } 
			?>
	</div>
</section>

<script type="text/javascript">
	function updateTime(){
		var currentTime = new Date()
		var hours = currentTime.getHours()
		var minutes = currentTime.getMinutes()
		if (minutes < 10){
			minutes = "0" + minutes
		}
		var t_str = hours + ":" + minutes + " ";
		if(hours > 11){
			t_str += "PM";
		} else {
			t_str += "AM";
		}
		document.getElementById('time_span').innerHTML = t_str;
	}
	setInterval(updateTime, 1000);
</script>

<?php
		include("footer.php");
	}else{
		header('location: index.php?pageaccess=forbidden');
		exit;
	}
?>