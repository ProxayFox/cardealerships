<?php
	require_once("o-db.php");
	session_start();
	if (isset($_POST)) {
		$vehicle = $_POST['vehicle'];

		
		// Add/update information
		$result = myDB::getInstance()->addvehical($imagename, $vehicle, $price, $kilometer, $colour, $transmission, $body, $drivetype, $regostrationplate, $regostrationstatus, $releasedate, $compliancedate, $stock, $fuelEconomyCombined);

		if (!$result) {
			// info was not updated
			header("Location: ../inventory.php?search=fail");
		} else {
			// info was updated
			header("Location: ../inventory.php?search=results");
		}
	}
?>