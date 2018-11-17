<?php

//start the session
session_start();

//validate session
if(isset($_SESSION['user'])){
	
//session is valid, the user is ready to logout
unset($_SESSION['user']);
unset($_SESSION['start']);
session_destroy();
header( "Location: index.php" );
}
else{
	session_destroy();
//session is not valid, return to index page
header( "Location: index.php" );
}
?> 