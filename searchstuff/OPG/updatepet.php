<?php
    require_once("sqlscripts/db.php");                       
    session_start();
    if (array_key_exists("user", $_SESSION)) {
		$petid = $_POST['petid'];
		$category = $_POST['category'];
		$pettype = $_POST['pettype'];
		$gender = $_POST['gender'];
		$agegroup = $_POST['agegroup'];
		$imagename = $_POST['imagename'];
		$description = $_POST['description'];

        opgDBscripts::getInstance()->editPet($petid,$category,$pettype,$gender,$agegroup,$imagename,$description);  
        header('Location: viewpets.php');  	
		}
    else {
        header('Location: index.php');
        exit;
    }   
?>