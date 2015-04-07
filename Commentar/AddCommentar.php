<?php
	include "../dataBaseConnection.php";
	$userId=$_SESSION["User_Name"];	
	$namagroup=$_SESSION["User_Group"];
	$sql=mysql_query("SELECT * from group Where namagroup='Minion'");

	echo"
			<li>
				<div class='ListComment'>
							<img src='' id='UserId'>
					<div class='Comment'>
							<h2 class='NameGU'>Nama</h2>
						<div class='Pamor'>
									<span id='Favorite'>Favorite</span>
										<img src='img/flatIcon/happy14.png' alt=''>
										<span id='Ratting'>Ratting</span>
										<img src='img/flatIcon/snack.png'>
						</div>
						<div id='commentarWord'>
							<p class='commentar'>
							</p>
						</div>
				</div>
				</div>
			</li>
	";


?>

	