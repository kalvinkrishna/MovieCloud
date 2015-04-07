<?php
	include "../dataBaseConnection.php";
	session_start();
	if(isset($_POST["sign-inEmail"]) AND isset($_POST["password"])){
		$email=$_POST["sign-inEmail"];
		$password=$_POST["password"];	
		$result = mysql_query("SELECT `email`,`Password`,`UserName`,`Foto`,`UserId` from `user` where `email` LIKE '$email' AND `Password` LIKE '$password'");
		$tampil = mysql_fetch_array($result);
		$_SESSION["User_Email"]=$tampil["email"];
		$_SESSION["User_password"]=$tampil["Password"];
		$_SESSION["User_Name"]=$tampil["UserName"];
		$_SESSION["User_Foto"]=$tampil["Foto"];
		$_SESSION["User_Id"]=$tampil["UserId"];

		if($tampil){
			if($tampil["email"]=="Admin"){
				header("location:../Home.php");
			}
			else{
				header("location:../Home.php");
			}
		}
		else{
			header("location:../Home.php");
		}
	}

	
	
	
	     



/*
	$_SESSION['id_user'] = $id;
	$_SESSION['name_user'] = $tampil['name'];

	$query = "select password from data_user where id = '$id'";
	$result = mysql_query("select password from data_user where id = '$id'");
	$count = mysql_fetch_array($result);
	if($count){
		header("location:index.php");
	}*/


	

?>