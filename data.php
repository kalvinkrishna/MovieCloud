<?php
	
	$link="Profile/OtherProfile.php?userid=";	

		include "dataBaseConnection.php";
	if(isset($_POST["input"])){

		$sql =  "SELECT reviewmovie.ID_MOVIE,reviewmovie.JudulFilm,reviewmovie.Banner,user.Foto,user.userId,user.UserName FROM `reviewmovie` INNER JOIN user ON reviewmovie.UserName=user.Email WHERE reviewmovie.JudulFilm LIKE '".$_POST["input"]."'";		
		$qs=mysql_query($sql) or die(mysql_error());
		$result=mysql_fetch_array($qs);
		$temp=$result["ID_MOVIE"];

		echo"<div id='BannerCommentarFoto'>
				<img src='".substr($result["Banner"],3)."' alt='none' id='FotoCommentar'>

				<hr>
					<div id='Publisher'>
							<a href='".$link.$result["userId"]."'>
								<img src='img/Profile/".$result["Foto"]."' alt='none' id='PublishBy' title='".$result["UserName"]."'>
							</a>
							<div>
								<span>".$result["JudulFilm"]."</span>
								<br>
								<p></p>
							</div>
					</div>
		</div>
		";
		echo "
	<div id='ContentLeft'>
				<div id='ColomCommentar'>
						<div id='CommentarWrapping'>
							";
									include'Commens.php';
									
							echo"
						</div>
						
				</div>
				
	</div>";

	}
	else{
		echo"<div id='BannerCommentarFoto'>
				<img src='img/Film/Action/31.jpg' alt='none' id='FotoCommentar'>

				<hr>
					<div id='Publisher'>
							<a href='Profile/OtherProfile.php?userid=vqxX'>
								<img src='img/Profile/Inggar.PNG' alt='none' id='PublishBy' title='inggar'>
							</a>
							<div>
								<span>Kita Kita Ninja</span>
								<br>
								<p></p>
							</div>
					</div>
		</div>
		";
		echo "
	<div id='ContentLeft'>
				<div id='ColomCommentar'>
						<div id='CommentarWrapping'>
							";
									include'Commens.php';					
							echo"
						</div>
						
				</div>
				
	</div>";
	}




?>
								
				
		