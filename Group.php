<!DOCTYPE html>
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
	<title>Group</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/slide-down.js"></script>
 	    <link rel="stylesheet" type="text/css" href="css/Group.css">
       	<link rel="icon" type="img/jpg" href="img/icon/logo.jpg">
		<script type="text/javascript" src="js/jquery.flippy.js"></script>
		<script type="text/javascript" src="js/Group.js"></script>
		<link rel="stylesheet" type="text/css" href="css/Font.css">

</head>
<body>	
	 <?php include 'Home/navigasitop.php';?>
		


			<div id="ListGroupping">
				<!--Tampilan Sebelah Kiri Grup Utama-->
					<div id="OwnGroup">
							
					</div>
					<div id="ListGrouppingWrappingIn">
						<!--Tengah-->
							<form>
								Search: <input type="text">
							</form>
							<hr>
							<div id="GroupListTengah">
									
							</div>

							
					</div>
					<input type="button" id="CreateGroup" value='Create Group'>


			</div>
			<?php
						include "Group/create group.php";

			?>

			<!--Flipping Group Yang Sesuai-->
			<div id="body-Create" style="background-color:#">
					<div id="left-position">
							<div id="containerProfile">
									<img src="img/user/Profile/abadi.png" width="100" height="100" title="ImageGroup" alt="" id="ImageGroup" class="a b">
									<button id="JoineGroup">Joined</button>
							</div>
							<div id="containerReview">
									<!--Nama Group-->
									<div id="NameGroup">
											<h2>Pencinta Film Lawas</h2>
											<img src="img/user/Profile/abadi.png" title="Admin" id="AdminGroup" alt="">
									</div>

									<div id="MemberLounge">
										<span>Anggota</span>
										<span id="JumlahAnggota">10</span>
										<?php include 'Member.php';?>
									</div>
									<div id="NavAdmin">
											<ul class="NavigAd">
											
												<li id="ListDis">List-Diskusi</li>
												<li id="AdDis" >Add-Diskusi</li>
											
											</ul>

									</div>
									<div id="listDiscus">
										  <?php
										  		include "ListDisscuss.php"; 
										  ?>

									</div>
									<!--BAGIAN UNTUK MENAMBAHKAN DISKUSI FILM DARI DATABASE-->

									<div id="AddDiscust" class="Discuss-Film">
											<img src="img/Group/logo.jpg" id="ImgDisscuss" alt="">
											<!--DicekBerdasarkan JenisGroupnya-->
											<div id="ident">
													<span id="DisTitle">JudulFilm</span>
													<hr>
											</div>
											<input type="text" value="1101-NamaFilm"/>
											<button>Add</button>
									</div>

							</div>

					</div>
					
					<div id="container-group">
						<?php
							echo"
							<div class='containerGroup'>
								<div id='boxComentar'>
									<form>
										<!--Discuss Film yang aktif di klik dalam group-->
										<img src='img/Group/logo.jpg' width='50' height='50' title='JudulFilm' id='DiskusiFilmLogo'>
										<span id='Judul'></span>

									</form>
									<hr>
									<div id='CommentBox'>
										<textarea id='CommentValue' rows='3' cols='60' placeholder='Type Massage Here..'></textarea>	
										<button id='Action'>Action</button>
									</div>
								</div>
									
							
									<!--Dinamic-->
									<h3 id='cekin'>Tidak Ada Diskusi yang tersedia</h3>
								
									
										<div id='CommentBoxList' name='".$_SESSION['User_Foto']."'>
											<ul>
												<!--Tiap Kali List commentarnya akan di update secara dinamis-->
											</ul>
										</div>
									
									
							</div>
							";?>
					</div>


					
						<div id="SearchG-Button" class="border-radius">
							<h6>Search</h6>
						</div>

			</div>


	
</body>
</html>