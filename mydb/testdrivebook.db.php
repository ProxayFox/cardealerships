<?php
	require_once("o-db.php");
	session_start();
	if (isset($_POST)) {
		$carID = $_POST['carID'];
		$bDate = $_POST['bDate'];
		$btime = $_POST['btime'];
		
		//Add Information into user 
		$result = myDB::getInstance()->creatBooking($carID, $bDate, $btime);

		if (!$result) {
			// info was not updated
			header("Location: ../testdrivebook.pro.php?booking=fail");
		} else {
			// info was updated
			header("Location: ../profile.pro.php?Booking=success");
		}
	}
?>