<style type="text/css">
	.Result{
		vertical-align: 15px;
		line-height: 10px;
	}
</style>
<?php
		
		include "../dataBaseConnection.php";
		session_start();
		//ini untuk ngitung jumlah commentnya
		function countComment(){
			
			$sql = "SELECT commentar.Commentar,user.UserName,user.Foto,commentar.ID_Commentar,commentar.Tanggal,commentar.Like FROM `commentar` INNER JOIN user ON commentar.CommentarBy=user.userId WHERE commentar.UserName='".$_SESSION["User_Id"]."'   ORDER BY `ID_Commentar` DESC ";
			$result=mysql_query($sql);
			$countCM=0;
			
					$countCM=mysql_num_rows($result)+1;
			
			echo"<br><br><span>$countCM Comment</span><br>";
		}
		//ini untuk memasukan komment kedatabasenya
		function insert(){

			$commentar=$_REQUEST["Commentar"];
			$pecah = explode("\r\n", $commentar);
			//text kosongan inisialisasi
			$text = "";
			for ($i=0; $i<=count($pecah)-1; $i++)
			{
				$part = str_replace($pecah[$i], "".$pecah[$i]."<br>", $pecah[$i]);
				$text .= $part;
			}
			$sql='';
			$d=date("Y-m-d");
			$ti=date("h:i:sa");
			$t=$d." ".$ti;	
			//bagian ini yang terpenting querynya visit gk visit abaikan saja
			if(isset($_SESSION["UserVisited"]))
				//commentar oleh user yang visit
				$sql = "INSERT INTO commentar (`ID_Commentar`, `Commentar`, `Tanggal`, `UserName`, `CommentarBy`) VALUES (NULL, '$text', '$t', '".$_SESSION["UserVisited"]."', '".$_SESSION["User_Id"]."')";
			else
				//commentar oleh user sendiri
				$sql = "INSERT INTO commentar (`ID_Commentar`, `Commentar`, `Tanggal`, `UserName`, `CommentarBy`) VALUES (NULL, '$text', '$t', '".$_SESSION["User_Id"]."', '".$_SESSION["User_Id"]."')";
			mysql_query($sql) or die(mysql_error());

		}
		//untuk select komment yang udah di insertkan
		function Select(){
			$sql = "SELECT commentar.Commentar,user.UserName,user.Foto,commentar.ID_Commentar,commentar.Tanggal,commentar.Like FROM `commentar` INNER JOIN user ON commentar.CommentarBy=user.userId WHERE commentar.UserName='".$_SESSION["User_Id"]."'   ORDER BY `ID_Commentar` DESC ";
			return $sql;
		}
		

		if(isset($_REQUEST['submit'])){
			
			countComment();
			insert();
			unset($_REQUEST['submit']);
		}
		else{
		countComment();
		//untuk nampilin komment yang udah di insertkan
		$result= mysql_query(Select()) or die(mysql_error());
		if($result){
			while($dataresult=mysql_fetch_assoc($result)){
				echo"
							<div class='CommentList' id='".$dataresult["ID_Commentar"]."'>
											<img src='img/Profile/".$dataresult["Foto"]."' alt=''/>
											<div class='leftPr'>
													<h3>".$dataresult["UserName"]." <span> Say...</span></h3>
													<hr>
													<span>".date("d-m-Y", strtotime(substr($dataresult["Tanggal"],0,16)))." </span>
													<p>".$dataresult["Commentar"]."</p>
													<div class='buttoncomment'>
														<div id='rightButton'>
														<a href='#'><img src='img/trophy36.png' alt='none'/ class='Like commentButtonsize'></a>
														<span id='LikeResult' class='Result'>".$dataresult["Like"]."</span>
														<a href='#'><img src='img/speech117.png' alt='none'/ class='Comment commentButtonsize'></a>
														<span id='CommentResult' class='Result'>".$dataresult["Like"]."</span>
														</div>
													</div>
											</div>

							</div>
				";

			}
		}
		else{
			echo"<h1 align='center'>Say...</h1>";
		}

		}

?>