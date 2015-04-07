<?php

	$link="Profile/OtherProfile.php?userid=";
	include "../dataBaseConnection.php";
	$sql='';
	session_start();
	if(isset($_REQUEST["deletes"])){
		$query="DELETE FROM `friendship` WHERE User='".$_SESSION["User_Id"]."'AND FriendWith='".$_REQUEST["deletes"]."' OR  User='".$_REQUEST["deletes"]."'AND FriendWith='".$_SESSION["User_Id"]."'";
		mysql_query($query) or die(mysql_error());
	}
	if(isset($_REQUEST["input"])){
		
		$input = $_REQUEST["input"];
		if($input!='')
		$sql="SELECT user.Foto,user.UserName,friendship.FriendWith FROM friendship INNER JOIN user ON friendship.FriendWith=user.userId WHERE friendship.User LIKE '%".$_SESSION["User_Id"]."%' AND user.UserName LIKE '%".$input."%'  ORDER BY user.UserName ASC";	
	}
	else
		$sql="SELECT user.Foto,user.UserName,friendship.FriendWith FROM friendship INNER JOIN user ON friendship.FriendWith=user.userId WHERE friendship.User LIKE '%".$_SESSION["User_Id"]."%'  ORDER BY user.UserName ASC";	
	
	$result=mysql_query($sql) or die(mysql_error());
	if($result){
		echo"
		<div id = 'back'>
				<div id = 'luar'>
		";
		while($results=mysql_fetch_assoc($result)){
				//menampilkan Pertemanan
				echo"
				
							<div class = 'dalam'>
								<div class='closeWrapper'>
										<img src='img/closes.png' class='closeButtons' style='width:20px; height:20px;' alt='no such file' title='Delete Friend'>
								</div>
								<div>
									<a href='".$link.$results["FriendWith"]."'><img class = 'pic-friend' src='img/Profile/".$results["Foto"]."' alt='Teman Tidak Ditemukan'></a>
									
								</div>
								<span class='lalal' style='display:none;'>".$results["FriendWith"]."</span>
								<div class = 'name-friend'>
										<h5>".$results["UserName"]."</h5>
								</div>
							</div>
				

				";
		}
		echo "	</div>
				</div>";	
	}
	

?>