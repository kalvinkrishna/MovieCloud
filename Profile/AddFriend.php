<?php
	//code ini digunakan untuk menambahkan teman
	include "../dataBaseConnection.php";
	session_start();
	$IdUser=$_SESSION["User_Id"];
	$friend=$_GET["userId"];

	$sql = "INSERT INTO `friendship` (ID, User, FriendWith) VALUES (NULL, '$IdUser', '$friend')";
	mysql_query($sql) or die(mysql_error());

	$sql = "INSERT INTO `friendship` (ID, User, FriendWith) VALUES (NULL, '$friend', '$IdUser')";
	mysql_query($sql) or die(mysql_error());
	header("location:../UserProfile.php");

?>