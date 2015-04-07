<?php
include "../dataBaseConnection.php";
if(isset($_POST["action"])){
	session_start();
	$judul=$_POST["JudulFIlm"];
	$genre=$_POST["genre"];
	$author=$_POST["Author"];
	$tanggal=$_POST["realease"];
	$timestamp = strtotime($tanggal); 
	$new_date = date('Y-m-d', $timestamp);
	$OverView=$_POST["OverView"];
	$Banner="../img/Film/".$genre."/".$_FILES["Banner"]["name"];
	$link=$_POST["YoutubeLink"];
	$link=substr($link,15,strlen($link));

	move_uploaded_file($_FILES["Banner"]["tmp_name"], $Banner);


	if($judul!="" && $genre!="" &&$author!="" && $tanggal!="" && $Banner!=""){
		$sql = "INSERT INTO reviewmovie (`ID_MOVIE`, `JudulFilm`, `Genre`, `Author`, `Realease`, `UserName`, `Link`, `Banner`, `OverView`) VALUES (NULL,'$judul','$genre','$author','$new_date','".$_SESSION["User_Email"]."','$link', '$Banner', '$OverView')";
		$result=mysql_query($sql) or die(mysql_error());

		if($result){
			header("location:../UserProfile.php");
		}
		else{
			echo"error nih";
		}
	}
	else{
		echo"Terjadi Kesalahan";
	}
}
?>