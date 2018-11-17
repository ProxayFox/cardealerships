<?php
	require_once("o-db.php");
	$loginSuccess = false;

	// verify user's credentials
	if (isset($_POST)) {
		session_start();
		$loginSuccess = (myDB::getInstance()->verifyLogin($_POST['username'], $_POST['password']));

		if ($loginSuccess == true) {
			// store session data
			$_SESSION['start']=1;
			$_SESSION['user'] = $_POST['username'];
			header('location: ../profile.pro.php?login=success');
			exit;
		} else{
			header('location: ../login.php?login=fail');
			exit;
		}
	}
?>
