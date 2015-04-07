<?php
	include '../dataBaseConnection.php';
	$email=$_POST["reset-email"];
	echo "user name: ".$email;

	$result = mysql_query("select Password from user where email LIKE '$email'");
	
	$tampil = mysql_fetch_array($result);
	if($tampil){
		echo " Your Password: ".$tampil["Password"];	
	}
	else{
	}

?>