<?php
	include "../dataBaseConnection.php";
	session_start();
	$adminCreate=$_SESSION["User_Email"];
	$NamaGroup=$_REQUEST["namaGroup"];
	$banner=$_REQUEST["GroupBanner"];
	$DeskripsionGroup=$_REQUEST["GroupDeskription"];

	$sql = "INSERT INTO `group` (NamaGroup, Admin, MemberGroup, JudulFilm, linkGroup, FotoGroup,DeskripsiGroup) VALUES ('$NamaGroup','$adminCreate','$adminCreate',DEFAULT,DEFAULT,'$banner','$DeskripsionGroup')";
	mysql_query($sql) or die ();

	if(mysql_error()){
		echo"grup sudah ada";
	}

?>