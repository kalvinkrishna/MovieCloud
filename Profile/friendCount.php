<?php
	include '../dataBaseConnection.php';
	session_start();
	$sql="SELECT user.Foto,user.UserName,friendship.FriendWith FROM friendship INNER JOIN user ON friendship.FriendWith=user.userId WHERE friendship.User='".$_SESSION["User_Id"]."'";
		$result=mysql_query($sql) or die(mysql_error());
		if($result){
			$count=mysql_num_rows($result);
			echo $count;
	}
													
?>