<?php
    require_once("sqlscripts/db.php");                       
    session_start();
    if (array_key_exists("user", $_SESSION)) {
		// Get Pet Data
		$category = $_POST['category'];
		$pettype = $_POST['pettype'];
		$gender = $_POST['gender'];
		$agegroup = $_POST['agegroup'];
		$description = $_POST['description'];
		
		// Get File Data
		$target = "pets/";
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
			// Add To Database
			opgDBscripts::getInstance()->addPet($category,$pettype,$gender,$agegroup,$imagename,$description);  			
		}
		
        header('Location: viewpets.php');  
		
		}
    else {
        header('Location: index.php');
        exit;
    }   
?>