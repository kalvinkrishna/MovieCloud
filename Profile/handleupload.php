<?php
	
		if($_GET["file"]){
					$error = false;
					$files = array(); 
				$destination="../img/Film/";
				move_uploaded_file(filename, $destination.basename($file["name"]))
		}
?>