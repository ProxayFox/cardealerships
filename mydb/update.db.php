<?php
	require_once("o-db.php");
	session_start();
	if (isset($_POST)) {
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$postCode = $_POST['postCode'];
		$country = 'Australia';
		
		//Add Information into user 
		$result = myDB::getInstance()->updateClientInfo($address, $city, $state, $postCode, $country);

		if (!$result) {
			// info was not updated
			header("Location: ../upDateProfile.pro.php?update=fail");
		} else {
			// info was updated
			header("Location: ../profile.pro.php?update=success");
		}
	}
?>