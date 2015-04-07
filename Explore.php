<!DOCTYPE html>
<?php
	session_start();
	 if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"]) || isset($_SESSION["Fb"])){

    }
    else{
        header("location:index.php");
    }
?>
	<html>
		<head>
			<title>Explore</title>
	
			<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
			<link rel="stylesheet" type="text/css" href="css/Explore.css">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<link rel="icon" type="img/jpg" href="img/icon/logo.jpg">
			<script type="text/javascript" src="js/libMovie.js"></script> <!--Menghubungkan dengan XML-->
			<script type="text/javascript" src="js/Explore.js"></script>
			<link rel="stylesheet" type="text/css" href="css/Font.css">
			<link rel="stylesheet" type="text/css" href="css/searcCss/default.css" />
			<link rel="stylesheet" type="text/css" href="css/searcCss/component.css" />
			<script src="js/search/modernizr.custom.js"></script>


			<meta charset="UTF-8" />
			


		</head>
		<body>
			
				
				<!--Contact Us-->
				<?php 
					include "Home/navigasitop.php";
					 if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"]) || isset($_SESSION["Fb"])){
					 	
					 		include "ExploreBodyContent.php";
						
					 }
							
					 else{
					 		include "MustSignIn.php";
					 }
				?>

				<!--Movie Show Youtube-->
			
		</body>
	</html>