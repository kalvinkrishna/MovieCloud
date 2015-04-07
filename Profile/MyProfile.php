<script type="text/javascript">
	
			$("#AddFriends").click(function(){
				$("#ProfileRight").load("Profile/GlobalFriend.php");
			});

			$("#upload").click(function(){
				$x = $("#imageBrowse").val();
				 document.getElementById("UserFoto").src="img/Profile/"+$x;
			});

</script>
<?php

	session_start();
	include"../dataBaseConnection.php";
	$userFoto='img/Profile/'.$_SESSION["User_Foto"];	
	$sql=mysql_query("SELECT * FROM user WHERE Email='".$_SESSION["User_Email"]."'") or die(mysql_error());
	$hasil=mysql_fetch_array($sql);
	echo"

			<div id='MyProfile'>
				
				<h3>MyProfile</h3>
					<div id='ImgPos'>
							<img id='UserProfiles' src='".$userFoto."' alt='' width='80px' height='80px'/>
							
					</div>

					<div id='WrapperMyProfile'>
										<label>Nama : </label>
										<span>".$_SESSION["User_Name"]."</span><br>
										<lable>Umur :</label>
										<span>".$hasil["Umur"]."</span><br>
										<label>Asal Kota: </label>	
										<span>".$hasil["Alamat"]."</span>
										<hr>
								<form action='Profile/FotoProfile.php' method='post' enctype='multipart/form-data'>
											<input type='file' id='imageBrowse' name='imageBrowse'></input>
											<input type='submit' id='upload' value='Upload' name='upload'></button>
									";
								

echo "
								<form>

					</div>	
			</div>

	";

?>