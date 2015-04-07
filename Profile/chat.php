<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat Box</title>
<style type="text/css">
<!--
.shout_box {
	background: #627BAE;
	width: 260px;
	overflow: hidden;
	display: inline-block;
}
.second{
	right: 40%;
}
.shout_box .header .close_btn {
	background: url(Profile/images/close_btn.png) no-repeat 0px 0px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .close_btn:hover {
	background: url(Profile/images/close_btn.png) no-repeat 0px -16px;
}

.shout_box .header .open_btn {
	background: url(Profile/images/close_btn.png) no-repeat 0px -32px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .open_btn:hover {
	background: url(Profile/images/close_btn.png) no-repeat 0px -48px;
}
.shout_box .header{
	padding: 5px 3px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: bold;
	color:#fff;
	border: 1px solid rgba(0, 39, 121, .76);
	border-bottom:none;
	cursor: pointer;
}
.shout_box .header:hover{
	background-color: #627BAE;
}
.shout_box .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow:auto;
	border: 1px solid #CCC;
}
.shout_msg{
	margin-bottom: 10px;
	display: block;
	border-bottom: 1px solid #F3F3F3;
	padding: 0px 5px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	color:#7C7C7C;
}
.message_box:last-child {
	border-bottom:none;
}
time{
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: normal;
	float:right;
	color: #D5D5D5;
}
.shout_msg .username{
	margin-bottom: 10px;
	margin-top: 10px;
}
.user_info input {
	width: 100%;
	height: 25px;
	border: 1px solid #CCC;
	border-top: none;
	padding: 3px 0px 0px 3px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
}
.shout_msg .username{
	font-weight: bold;
	display: block;
}
.FriendChat{
	width: 80%;
	height: 100%;
	margin: auto;
	position: absolute;
	z-index: 8;
	left: 45%;
}
.pic-friendS{
	border-radius: 50px;
	width: 100%;
	height:100%;
}
#WrapperChat{
	background: transparent;
	overflow: hidden;
	position: fixed;
	bottom: 0;
	z-index:9;
	width: 80%;
}
#SWrapperChat{
	position: relative;
	width: auto;
	margin-right: 10px;
	height: inherit;
	float: right;
}
.FriendFoto{
	margin-top: 10px;
	width: 80px;
	height: 80px;
}
-->
</style>


<script type="text/javascript">
$(document).ready(function() {

	$(".pic-friendS").click(function(){
		$a=$(this).parent().children("span").html();
		$b=$(this,'img').attr('title');
		
		//untuk chat box
		$.post("Profile/chatBox.php",{UserTargets:$b},function(data){
			$("#SWrapperChat").html(data);
		});
	});
});

</script>
</head>

<body>
	<h1 style='text-align:center;'>Choose your Friend To Chat</h1>
<div class='FriendChat'>
		<?php
			
			include "../dataBaseConnection.php";
				$sql=mysql_query("SELECT user.Foto,user.UserName,friendship.FriendWith FROM friendship INNER JOIN user ON friendship.FriendWith=user.userId WHERE friendship.User LIKE '%".$_REQUEST["userid"]."%'  ORDER BY user.UserName ASC") or die(mysql_error());
				while($results=mysql_fetch_assoc($sql)){
					echo"<div class='FriendFoto'>
						<span style='display:none;'>".$results["FriendWith"]."</span>
						<img class = 'pic-friendS' src='img/Profile/".$results["Foto"]."' title='".$results["UserName"]."'alt='Teman Tidak Ditemukan'>
					</div>";
				} 
		?>

		
</div>
<div id='WrapperChat'>
	<div id='SWrapperChat'>
			
			

	</div>
	 <span id='shout_username' style='display:none;'><?php echo $_REQUEST["UsersName"];?></span>
</div>
</body>
</html>
