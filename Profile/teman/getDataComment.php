<?php

		include "../../dataBaseConnection.php";
		
			session_start();
	
	
		
		//input commentar
		if(isset($_REQUEST['submit'])){
			$commentar=$_REQUEST["Commentar"];
			$pecah = explode("\r\n", $commentar);
			//text kosongan inisialisasi
			$text = "";
			for ($i=0; $i<=count($pecah)-1; $i++)
			{
				$part = str_replace($pecah[$i], "".$pecah[$i]."<br>", $pecah[$i]);
				$text .= $part;
			}
			$t=date("Y-m-d h:i");		
			$sql= "INSERT INTO commentar (`ID_Commentar`, `Commentar`, `Tanggal`, `UserName`, `CommentarBy`) VALUES (NULL, '$text', '$t', '".$_SESSION["idFriend"]."', '".$_SESSION["User_Id"]."')";
			mysql_query($sql) or die(mysql_error());
			unset($_REQUEST['submit']);
		}
		else{
		$sql = "SELECT commentar.Commentar,user.UserName,user.Foto,commentar.ID_Commentar,commentar.Tanggal FROM `commentar` INNER JOIN user ON commentar.CommentarBy=user.userId WHERE commentar.UserName='".$_SESSION["idFriend"]."'   ORDER BY `ID_Commentar` DESC ";
		$result= mysql_query($sql) or die(mysql_error());
			if($result){

				while($dataresult=mysql_fetch_assoc($result)){
					echo"
								<div class='CommentList' id='".$dataresult["ID_Commentar"]."'>
												<img src='../img/Profile/".$dataresult["Foto"]."' alt=''/>
												<div class='leftPr'>
														<h3>".$dataresult["UserName"]." <span> Say...</span></h3>
														<hr>
														<span>".date("d-m-Y", strtotime(substr($dataresult["Tanggal"],0,16)))." </span>
														<p>".$dataresult["Commentar"]."</p>
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