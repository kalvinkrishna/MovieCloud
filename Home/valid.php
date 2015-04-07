<?php
	include"../dataBaseConnection.php";
	if(isset($_REQUEST["emailvalid"])){
		$result = mysql_query("select Password from user where email LIKE '".$_REQUEST["emailvalid"]."'");
	
		$tampil = mysql_fetch_array($result);
		if($tampil){
			echo"<span>Email anda : ".$_REQUEST["emailvalid"]." dan password anda : ".$tampil["Password"]."</span>";
		}
		else{
			echo"<span class='error'>Anda Belum Terdaftar</span>";
		}
	}

?>