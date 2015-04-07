<?php
	session_start();
	if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"])){

	}
	else{
		header("location:index.php");
	}
?>
<html>
<head>
	<title>UserProfile</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 	<link rel="icon" type="img/jpg" href="../img/icon/logo.jpg">
	 	<link rel="stylesheet" type="text/css" href="../css/Profile.css">
	 	<script type="text/javascript" src="../js/Profile/OtherProfiles.js"></script>
	 	<link rel="stylesheet" type="text/css" href="../css/friend.css">
	 	
</head>
<body>
	<?php
		//menyimpan idfriend yang diklik
		$_SESSION["idFriend"]=$_GET["userid"];
	?>
	<div id="Profile">
			<div id="ProfileLeft">
					<?php include 'teman/userData.php';?>
					<div id="Content">
							<ul>	
									<?php
										include "../dataBaseConnection.php";
									?>
									<li><a href="../Home.php"><span class="leftSpan">Home</span> </a><span class="rightSpan" id="ProfileHome"></span></li>
									<li id="LBiodata" class="t"><span class="leftSpan">Biodata</span> <span class="rightSpan" id="Biodata"></span></li>
									<li id="LRoll" class="t"><span class="leftSpan">Roll</span> <span class="rightSpan" id="Rolls"></span></li>
									<li id="Lpesan" class="t"><span class="leftSpan">Dinding</span> <span class="rightSpan" id="Pesan"></span></li>
									<li id="LPopularity" class="t"><span class="leftSpan">Popularity</span> <span class="rightSpan" id="Popular"></span></li>
									<li id='LFriend' class="t"><span class="leftSpan">Friend

											<?php
													$sql="SELECT user.Foto,user.UserName,friendship.FriendWith FROM friendship INNER JOIN user ON friendship.FriendWith=user.userId WHERE friendship.User='".$_SESSION["idFriend"]."'";
													$result=mysql_query($sql) or die(mysql_error());
													$count=0;
													if($result){
														while($data=mysql_fetch_array($result)){
															$count++;
														}
													}
													echo "<span id='count'>$count</span>";
											?>
									</span><span class="rightSpan" id="FriendLists"></span>

									</li>

									<li id="LBack" class="t"><span class="leftSpan"><a href="../UserProfile.php">Back</a></span> <span class="rightSpan" id="BackMenu"></span></li>

									
							</ul>	
					</div>
					
			</div>
			<div id="ProfileRight">
			
			</div>

	</div>
</body>
</html>