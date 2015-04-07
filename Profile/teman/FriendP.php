
<?php
	$link="UserProfile.php?userid=";
	include "../../dataBaseConnection.php";

	session_start();
	

	$sql="SELECT user.Foto,user.UserName,friendship.FriendWith FROM friendship INNER JOIN user ON friendship.FriendWith=user.userId WHERE friendship.User='".$_SESSION["idFriend"]."'";
	$result=mysql_query($sql) or die(mysql_error());
	echo"
		<div id = 'back'>
				<div id = 'luar'>
	";
	while($results=mysql_fetch_assoc($result)){
			echo"
			
						<div class = 'dalam'>
							<div>";
							if($results["FriendWith"]==$_SESSION["User_Id"]){
								echo"
								<a href='../UserProfile.php?userid=".$results["FriendWith"]."'><img class = 'pic-friend' src='../img/Profile/".$results["Foto"]."' alt='Teman Tidak Ditemukan'></a>
								";
								
							}
							else{
								echo"
								<a href='OtherProfile.php?userid=".$results["FriendWith"]."'><img class = 'pic-friend' src='../img/Profile/".$results["Foto"]."' alt='Teman Tidak Ditemukan'></a>
								";
							}

			echo"			</div>
							<div class = 'name-friend'>
									".$results["UserName"]."
							</div>
						</div>
			

			";
	}
	echo "	</div>
			</div>";

/*
	<div class = 'dalam'>
			<div >
				<a href='".$link."456'> <img class = 'pic-friend' src='img/imgGlen/2.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."789'><img class = 'pic-friend' src='img/imgGlen/3.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."891'><img class = 'pic-friend' src='img/imgGlen/4.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."7890'><img class = 'pic-friend' src='img/imgGlen/5.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."789a'><img class = 'pic-friend' src='img/imgGlen/6.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."7892'><img class = 'pic-friend' src='img/imgGlen/7.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."7895'><img class = 'pic-friend' src='img/imgGlen/8.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."789o'><img class = 'pic-friend' src='img/imgGlen/9.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>
		<div class = 'dalam'>
			<div >
				<a href='".$link."789k'><img class = 'pic-friend' src='img/imgGlen/10.jpg' alt='Teman Tidak Ditemukan'></a>
			</div>
			<div class = 'name-friend'>
					Sabina
			</div>
		</div>*/

?>


