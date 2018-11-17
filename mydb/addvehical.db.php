<?php
	require_once("o-db.php");
	session_start();
	if (isset($_POST)) {
		$vehicle = $_POST['vehicle'];
		$price = $_POST['price'];
		$kilometer = $_POST['kilometer'];
		$colour = $_POST['colour'];
		$transmission = $_POST['transmission'];
		$body = $_POST['body'];
		$drivetype = $_POST['drivetype'];
		$regostrationplate = $_POST['regostrationplate'];
		$regostrationstatus = $_POST['regostrationstatus'];
		$releasedate = $_POST['releasedate'];
		$compliancedate = $_POST['compliancedate'];
		$stock = $_POST['stock'];
		$fuelEconomyCombined = $_POST['fuelEconomyCombined'];

		// for the image
		$target = "../img/imges/";
		$ctarget = $target . basename($_FILES["imagename"]["name"]);
		$imagename = ($_FILES["imagename"]["name"]);
		$imgtype = pathinfo($ctarget,PATHINFO_EXTENSION);

		// Check File Type
		if($imgtype != "jpg" && $imgtype != "png" && $imgtype != "jpeg" && $imgtype != "gif" ) {
			$imgerror ='Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>The file entered is a '.$imgtype.' type';
			$_SESSION['img_error'] = $imgerror;
			echo $imgerror;
		}
		else {
			$_SESSION['img_error'] = '';
			// Save Uploaded Files
			move_uploaded_file($_FILES["imagename"]["tmp_name"], $ctarget);
		}
		
		// Add/update information
		$result = myDB::getInstance()->addvehical($imagename, $vehicle, $price, $kilometer, $colour, $transmission, $body, $drivetype, $regostrationplate, $regostrationstatus, $releasedate, $compliancedate, $stock, $fuelEconomyCombined);

		if (!$result) {
			// info was not updated
			header("Location: ../addinventory.admin.php?inventory=fail");
		} else {
			// info was updated
			header("Location: ../profile.pro.php?inventory=success");
		}
	}
?>