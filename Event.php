<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"])){

	}
	else{
		header("location:index.php");
	}

?>
<style type="text/css">

		body{
			background-repeat: no-repeat;
		}
</style>
	<html>
		<head>
			<title>Event</title>
	
			<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
			<link rel="stylesheet" type="text/css" href="css/Event.css">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<link rel="icon" type="img/jpg" href="img/icon/logo.jpg">
			<script type="text/javascript" src="js/libMovie.js"></script> <!--Menghubungkan dengan XML-->
			<script type="text/javascript" src="js/Explore.js"></script>
			<link rel="stylesheet" type="text/css" href="css/Font.css">
			<!-- <link rel="stylesheet" type="text/css" href="css/searcCss/default.css" />
			<link rel="stylesheet" type="text/css" href="css/searcCss/component.css" /> -->
			<link rel="stylesheet" type="text/css" href="css/component.css" />
			<script src="js/search/modernizr.custom.js"></script>


			<meta charset="UTF-8" />
			


		</head>
		<body style='background:url("img/back.jpg");'>
			
				
				<!--Contact Us-->
				<?php 
					include "Home/navigasitop.php";
					 if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"])){
					 	
					 		?>

				<h1 id="judul">World Wide Event</h1>
					 		<div id="efek">


					 		<ul class="grid cs-style-4">
				<li>
					<figure>
						<div><img src="images/1.png" alt="img05"></div>
						<figcaption>
							<h3>Indonesian Film Fest </h3>
							<span>December, 26th 2014<a href="st" id="berlin"></a></span>
							<span>Jakarta, Indonesia</span>
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/2.png" alt="img06"></div>
						<figcaption>
							<h3>Cannes Fest</h3>
							<span>January, 15th 2014</span>
							<span>Cannes, France</span>
							<a href="http://dribbble.com/shots/1118904-Game-Center">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/3.png" alt="img02"></div>
						<figcaption>
							<h3>Austin Film Fest</h3>
							<span>February, 15th 2015 </span>
							<span>NY, USA</span>
							<a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/4.png" alt="img04"></div>
						<figcaption>
							<h3>GIFF</h3>
							<span>March, 29th 2015</span>
							<span>Guatemala, Venezuela</span>
							<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/5.png" alt="img01"></div>
						<figcaption>
							<h3>Interrnational FilmFest Berlin</h3>
							<span>December, 26th 2015</span>
							<span>Berlin, Germany</span>
							<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
						</figcaption>
					</figure>
				</li>
				
				<li>
					<figure>
						<div><img src="images/6.png" alt="img03"></div>
						<figcaption>
							<h3>London Film Festival</h3>
							<span>August, 21st 2015</span>
							<span>London, UK</span>
							<a href="http://dribbble.com/shots/1117308-Phone">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/7.png" alt="img04"></div>
						<figcaption>
							<h3>Tiff</h3>
							<span>December 23rd 2014</span>
							<span>Toronto, USA</span>
							<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/8.png" alt="img06"></div>
						<figcaption>
							<h3>Tampere Film Festival</h3>
							<span>January, 18th 2015</span>
							<span>Tampere, Belgium</span>
							<a href="http://dribbble.com/shots/1118904-Game-Center">Take a look</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div><!-- /container -->

		</div>


				<?php
						
					 }
							
					 else{
					 		include "MustSignIn.php";
					 }
				?>
				<script src="js/toucheffects.js"></script>

				<!--Movie Show Youtube-->
			
		</body>
	</html>