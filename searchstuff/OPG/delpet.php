<?php
    require_once("sqlscripts/db.php");                       
    session_start();
    if (array_key_exists("user", $_SESSION)) {
		$petid = $_POST['petid'];
        opgDBscripts::getInstance()->deletePet($petid);  
        header('Location: viewpets.php');  	
		}
    else {
        header('Location: index.php');
        exit;
    }   
?>