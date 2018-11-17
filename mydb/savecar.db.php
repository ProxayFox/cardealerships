<?php
	require_once("o-db.php");
	session_start();
	if (isset($_POST)) {
		$carID = $_POST['carID'];
		
		//Add Information into user 
		$result = myDB::getInstance()->saveSavedCar($carID);

		if (!$result) {
			// info was not updated
			header("Location: ../inventory.pro.php?update=fail");
		} else {
			// info was updated
			header("Location: ../inventory.pro.php?update=success");
		}
	}
?>