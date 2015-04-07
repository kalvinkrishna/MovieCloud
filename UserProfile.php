<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"])){

	}
	else{
		header("location:index.php");
	}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
			
			window.setInterval(function(){
			 $.post('Profile/friendCount.php', {load_data:1},  function(data) {
			    $("#count").html(data);
			 });
			}, 100);

</script>
<html>
<head>
	<title>UserProfile</title>
	
	 	<link rel="icon" type="img/jpg" href="img/icon/logo.jpg">
	 	<link rel="stylesheet" type="text/css" href="css/Profile.css">
	 	<script type="text/javascript" src="js/Profile/UserProfile.js"></script>
	 	<link rel="stylesheet" type="text/css" href="css/friend.css">
	 	<link rel="stylesheet" type="text/css" href="css/searcCss/default.css" />
		<link rel="stylesheet" type="text/css" href="css/searcCss/component.css" />

</head>
<body>
	<div id="Profile">
			<div id="ProfileLeft">
					<?php include 'Profile/userData.php';?>
					<div id="Content">
							<ul>	
									<?php
										include "dataBaseConnection.php";
									?>
									<li><a href="Home.php"><span class="leftSpan">Home</span> </a><span class="rightSpan" id="ProfileHome"></span></li>
									<li id="LBiodata" class="t"><span class="leftSpan">Biodata</span> <span class="rightSpan" id="Biodata"></span></li>
									<li id="LRoll" class="t"><span class="leftSpan">Roll</span> <span class="rightSpan" id="Rolls"></span></li>
									<li id="Lpesan" class="t"><span class="leftSpan">Dinding</span> <span class="rightSpan" id="Pesan"></span></li>
									<li id="LPopularity" class="t"><span class="leftSpan">Popularity</span> <span class="rightSpan" id="Popular"></span></li>
									<li id='LFriend' class="t"><span class="leftSpan">Friend
											<span id='count'>
											
											</span>
									</span><span class="rightSpan" id="FriendLists"></span></li>
									<li id='LChat' class="t"><span class="leftSpan">Chat</span> <span class="rightSpan" id="Chat"></span></li>
									<li id="LGlobalUser" class="t"><span class="leftSpan">GlobalUser</span> <span class="rightSpan" id="GlobalUser"></span></li>									
									<li id='LSetting' class="t"><span class="leftSpan">Setting</span> <span class="rightSpan" id="Psetting"></span></li>
									<li class="t"><span class="leftSpan"><a href="logout.php">LogOut</a></span> <span class="rightSpan" id="PLogOut"></span></li>

							</ul>	
					</div>
					
			</div>

			<div id="ProfileRight">
					
				
			</div>

	</div>

	<span id='ThisUser' style='display:none;'><?php echo $_SESSION["User_Id"]?></span>
	<span id='ThisUserName' style='display:none;'><?php echo $_SESSION["User_Name"]?></span>
</body>
</html>