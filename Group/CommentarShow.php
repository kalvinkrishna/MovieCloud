<?php
	include "../dataBaseConnection.php";
	session_start();
	$username=$_SESSION["User_Name"];
	$userFoto=$_SESSION["User_Foto"];
	


	$namaGroup=$_REQUEST["namaGroup"];
	$query= "SELECT `Commentar`,`Tanggal`,`User` WHERE `NamaGroup`='$namaGroup'";
	$result=mysql_query($query);

	while($row=mssql_fetch_assoc($result)){
		echo"
				<li>
					<div class='ListComment'>
						<img src='' id='UserId'>
						<div class='Comment'>
							<h2 class='NameGU'>Nama</h2>
							<h2 class='NameGU'>".$row["Tanggal"]."</h2>
							<div class='Pamor'>
								<span id='Favorite'>Favorite</span>
								<img src='img/flatIcon/happy14.png'>
								<span id='Ratting'>Ratting</span>
								<img src='img/flatIcon/snack.png'>
							</div>
						<div id='commentarWord'>
							<p class='commentar'>".$row["Commentar"]."</p>
						</div>
						</div>
					</div>
				</li>
		";
	}
?>
