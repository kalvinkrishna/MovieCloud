<?php
	//file ini digunakan untuk mengupload foto ke database menggunakan konsep ajax 
	include "../dataBaseConnection.php";
	if($_POST["upload"]){
		echo "sesuatu";
		session_start();

		$file=$_FILES['imageBrowse']['name'];

		$upload="../img/Profile/".$file;
		
		$move=move_uploaded_file($_FILES["imageBrowse"]["tmp_name"], $upload);
		echo $upload.basename($file);
		
		$sql = "UPDATE `user` SET Foto='$file' WHERE Email LIKE '".$_SESSION["User_Email"]."'";
		mysql_query($sql) or die (mysql_error());
		
		$_SESSION["User_Foto"]=$file;	
		header("location:../UserProfile.php");
		
		
	}


?>