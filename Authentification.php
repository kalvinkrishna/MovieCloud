<?php
session_start();
	if(isset($_SESSION["User_Email"]) AND isset($_SESSION["User_password"])){
		session_destroy();
	}
	else{
			header("location:index.php");
	}

?>