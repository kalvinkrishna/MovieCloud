	<link rel="stylesheet" type="text/css" href="../css/VideoFrame.css">
	
<?php

	$LogoProfile=array(
		'img/flatIcon/pins38.png',
		'img/flatIcon/earth26.png',
		'img/flatIcon/popcorn1.png'
	);
	session_start();
	include "../../dataBaseConnection.php";
	$query=mysql_query("select Email from user where userId='".$_SESSION["idFriend"]."'");
	$userName=mysql_fetch_array($query);

	$result=mysql_query("select Link from reviewmovie where UserName='".$userName["Email"]."'") or die(mysql_error());

	if(mysql_error()){
		echo "Sorry Terjadi Kesalahan";
	}
	if(mysql_num_rows($result)>0){
		echo"
			<div id='wrapperPright'>
					<div class='wrapperContents' id='HomeProfile'>
		";

							while($hasil=mysql_fetch_assoc($result)){
								echo"<div class='VideoFrame'>";
								echo"<iframe width='280' height='180' src='//www.youtube.com/embed/".$hasil["Link"]."' class='Framep' class='Action'></iframe>";
									echo"<div class='Favoritesbutton'>
												<img src='../img/heart301.png' alt='' class='Like ukuranButton'>
												<span>1</span>
												<img src='../img/cinema11.png' alt='' class='Dislike ukuranButton'>
												<span>1</span>
									</div>";

								echo"</div>";
							}

							
		echo"		</div>
			</div>
		";
	}
	else{	
		echo"<h1 align='center'>Tidak Ada Movie</h1>";
	}
?>