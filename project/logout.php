<?php
	//start the session
	session_start();
	if(isset($_SESSION['username'])) //the user is logged in
	{
		//clear the session variables containing the users info
		unset($_SESSION['username']); 
		unset($_SESSION['password']);
	}
	
	//redirect the user to the home page
	header("location: home.php");

?>
