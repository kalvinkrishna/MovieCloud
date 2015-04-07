<?php
	//file ini digunakan untuk mengupload foto ke database menggunakan konsep ajax 
	include "../dataBaseConnection.php";
	if($_REQUEST["elemet"]){
		session_start();
		$userFoto=$_REQUEST["elemet"];
		$_SESSION["User_Foto"]=$userFoto;
		$sql = "UPDATE `user` SET Foto='$userFoto' WHERE Email LIKE '".$_SESSION["User_Email"]."'";
		
		mysql_query($sql) or die (mysql_error());
		echo"<img id='UserProfiles' src='img/Profile/".$userFoto."' alt='' width='80px' height='80px'/>";
	}

?>