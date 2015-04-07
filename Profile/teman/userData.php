
<?php



include "../dataBaseConnection.php";
$result=mysql_query("SELECT Foto,UserName from user WHERE userId='".$_SESSION["idFriend"]."'");
$results=mysql_fetch_array($result);
$userFoto='../img/Profile/'.$results["Foto"];
$AsalKota='Jambi';
	echo "
			<div id='UserVillage'>
						<img id='UserFoto' src='".$userFoto."' alt=''/>
				
			</div>
	";

?>