
<?php

	$link="Profile/OtherProfile.php?userid=";
	include "../dataBaseConnection.php";
	$sql='';
	session_start();
	if(isset($_REQUEST["input"])){
		
		$input = $_REQUEST["input"];
		if($input!='')
		$sql="SELECT Foto,UserName,userId From user  WHERE UserName LIKE '%".$input."%'  ORDER BY UserName ASC";	
	}
	else
		$sql="SELECT Foto,UserName,userId FROM user ORDER BY UserName ASC";	
	
	$result=mysql_query($sql) or die(mysql_error());


	if(mysql_num_rows($result)){
		echo"
		<div id = 'back'>
				<div id = 'luar'>
		";
		while($results=mysql_fetch_assoc($result)){
			if($results["userId"] !=$_SESSION["User_Id"]){
				echo"
							<div class = 'dalam'>
								<div>
								<a href='".$link.$results["userId"]."'><img class = 'pic-friend' src='img/Profile/".$results["Foto"]."' alt='Teman Tidak Ditemukan'></a>
								</div>
								<div class ='name-friend'>
										".$results["UserName"]."
								</div>
								<div class='AddFriend'>Add</div>
							</div>

				";
			}
		}
		echo "	</div>
				</div>";	
	}
	

?>