<script type="text/javascript">
			$love=false;
			$("#MoreInfo").click(function(){
				$("#ProfileRight").load("Profile/RollMovie.php");
			});
			$("#UploadButton").click(function(){
				$("#ProfileRight").load("Profile/RollMovie.php");
			});

			$(".Like").click(function(){
					$temp=$(this).parent().children(".idMovie").html();
					$love=!$love;
					if($love==true)
						$(this).attr("src","img/heart33.png");
					else if($love==false)
						$(this).attr("src","img/heart301.png");
					
			});
</script>
	<link rel="stylesheet" type="text/css" href="css/VideoFrame.css">
<?php

	$LogoProfile=array(
		'img/flatIcon/pins38.png',
		'img/flatIcon/earth26.png',
		'img/flatIcon/popcorn1.png'
	);
	session_start();
	include "../dataBaseConnection.php";
	$result=mysql_query("select ID_MOVIE,Link,Love,Watch,Banner from reviewmovie where UserName='".$_SESSION["User_Email"]."'");
	echo"
			<div id='MoreInfo'>
							<h5>Share Review</h5>
			</div>

	";
	if(mysql_error()){
		echo "Sorry Terjadi Kesalahan";
	}
	if(mysql_num_rows($result)>0){
		echo"
		<div id='wrapperPright'>
				<div class='wrapperContents' id='HomeProfile'>";
						while($hasil=mysql_fetch_assoc($result)){
							echo"
							<div class='VideoFrame'>
									<iframe width='400' height='180' src='//www.youtube.com/embed/".$hasil["Link"]."' allowfullscreen class='Framep' class='Action'></iframe>
									<div class='Favoritesbutton'>
														<span class='idMovie' style='display:none;'>".$hasil["ID_MOVIE"]."</span>
														<img src='img/heart301.png' alt='no image' class='Like ukuranButton'>
														<span class='Love'>".$hasil["Love"]."</span>
														<img src='img/cinema11.png' alt='no image' class='Dislike ukuranButton'>
														<span class='Love'>".$hasil["Watch"]."</span>
										</div>
							</div>";
						}
		echo"
				</div>
		</div>";
	}
	else{	
		echo"<h1 align='center'>Belum Upload Movie</h1>";
		echo"<h3 align='center' id='UploadButton'>Upload</h3>";
	}
?>
