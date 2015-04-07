<?php
	
	$hostName='localhost';
	
	$userName='root';
	$databasePassword='180195';
	$databaseName='moviecloud';
		$cont=mysql_connect($hostName,$userName,$databasePassword);
		if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
			echo"";
		}
		
		$databaseselection=mysql_select_db($databaseName,$cont);
		

?>