<?php
    session_start();
    if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"])){

    }
    else{
        header("location:index.php");
    }

?>
<html>
<head>
	<title>Community</title>
	<link rel="stylesheet" type="text/css" href="css/CommentarMovie.css">
	<script type="text/javascript" src="js/MovieCommentar.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Font.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	
	<link rel="icon" type="img/jpg" href="img/icon/logo.jpg">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/searcCss/default.css" />
	<link rel="stylesheet" type="text/css" href="css/searcCss/component.css" />
	<script src="js/search/modernizr.custom.js"></script>
	
</head>
	
<body>
	<?php 
		include 'Home/navigasitop.php';
		$link="Profile/OtherProfile.php?userid=";
	?>

	<div id="BodyComment">
		<?php
				include "data.php";
		?>
	</div>
	
	<?php
			include "MovieSearchBox.php";
	?>
</body>
</html>