<?php
	require_once("o-db.php");
	session_start();
	if (isset($_POST)) {
		$price = $_POST['price'];
		$colour = $_POST['colour'];
		$drivetype = $_POST['drivetype'];
		
		// Add/update information
		$result = myDB::getInstance()->search($price, $colour, $drivetype);

		if (!$result) {
			// info was not updated
			header("Location: ../inventorysearch.php?search=fail");
		} else {
			// info was updated
			header("Location: ../inventorysearch.php?search=success");
		}
	}
?>