<script type="text/javascript">
	
			$("#AddFriends").click(function(){
				$("#ProfileRight").load("Profile/GlobalFriend.php");
			});

			$("#upload").click(function(){
				$x = $("#imageBrowse").val();
				
				//Menggunakan Ajax
				$.get(
					"../FotoProfile.php",
					{elemet:$x},
					function(data){
						$("#UserProfiles").remove();
						$("#ImgPos").html(data);
					}
				);
				 document.getElementById("UserFoto").src="img/Profile/"+$x;
				

			});

</script>
<?php
	session_start();
	include"../../dataBaseConnection.php";
	$friendUser=$_SESSION["idFriend"];

	$sql=mysql_query("SELECT UserName,Foto,Umur,Alamat FROM user WHERE userId='$friendUser'") or die(mysql_error());
	$result=mysql_fetch_array($sql);

	$userFoto='img/Profile/'.$result["Foto"];	
	echo"

			<div id='MyProfile'>
				

					<div id='ImgPos'>
							<img id='UserProfiles' src='../".$userFoto."' alt='' width='80px' height='80px'/>
							
					</div>

					<div id='WrapperMyProfile'>
								<form>
										<label>Nama : </label>
										<span>".$result["UserName"]."</span><br>
										<lable>Umur :</label>
										<span>".$result["Umur"]."</span><br>
										<label>Asal Kota: </label>	
										<span>".$result["Alamat"]."</span>
										<hr>
								";	
									//cek apakah sudah berteman			
									$sql=mysql_query("select * from friendship WHERE User='".$_SESSION["User_Id"]."' AND FriendWith='".$_SESSION["idFriend"]."'");
									$result=mysql_fetch_assoc($sql);
									if(mysql_num_rows($sql)>0){		
										$_SESSION["ADDFriend"]["id"]=$result["FriendWith"];
									}
									else{
										echo"
												<a href='AddFriend.php?userId=".$_SESSION["idFriend"]."'><input type='button' id='AddFriends' value='Tambah Teman'></button></a>
										";	
										
										
									}
								
							

echo "
								<form>

					</div>	

					<div id='Motto'>
						<h2><i>No metter What You do It</i></h2>

					</div>

			</div>

	";

?>