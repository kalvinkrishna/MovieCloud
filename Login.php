<!DOCTYPE html>

<html>
	<head>
			<title>Login Form</title>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script type="text/javascript" src="js/Login.js"></script>
			<link rel="icon" type="img/jpg" href="img/icon/logo.jpg">
			
			<style type="text/css">
					body{
						margin: 0px;
					}
					#left-side{
						position: absolute;
						height: 100%;
						width: 15%;
						background-color: #23f3f5;
						left: 0px;
						z-index: 10;
						margin: 0px;
					}
					#right-side{
						
						width: 70%;
						height: 90%; 
						position: absolute;
						left: 20%;
						top: 60px;
						
					}
					#uploadPreview{
						margin: 10px;
					}	
					#ClientProfile{
						width: 70%;
						height: 90%; 
						position: absolute;
						left: 20%;
						top: 60px;
						display:none;
					}
					#ClientProfile>form>img{
						float:left;
						top:0px;
					}
					#NamaUser{
						padding-left: 240px;
					}
					#container{
						margin: 0px;
						width: 100%;
						height: 100%;
						background-color: #fab08c;
						z-index: 1;
					}
					#Loginform{
						width: 20%;
						height: 50%;
						float: left;
						border-right: 5px dotted #c3c2c1;
						padding:70px;
						font-size: 20px;
					}
					#Loginform a{
						color: blue;
						font-size: 10px;
						margin-left: 0px;
					}
					#Loginform input{
						border: 1px double;
						height: 20px;
						border-radius: 5px;
						opacity: 0.3px;
					}
					#Another-Login{
						float: right;

					}
					#Loginform h3{
						color: #51c0ff;
						font-size: 25px;
					}

					#Register{	
						height: 85%;
						width: 55%;
						background: #fe8f5a;
						float: right;
						border-radius: 5px;
					}
					#Register form{
						padding: 15px;
						color: #ffffff;
						border-right: 5px dotted #d3d5d6;
						width: 45%;
						margin-top:5px;
					}
					#Register .form2{
						position: absolute;
						width: 20%;
						border: none;
						top: 0px;
						right: 20px;

					}
					#Register form input{
						border-radius: 8px;
					}
					#Register .form1{
						border-right: dotted #ffffff;
					}
					#Register input{
						width: 130px;
						margin-left: 20px;
					}
					#submit{
						margin-top: 10px;
						margin-left: 50px;
					}
					#Register h5{
						font-size: 14px;
						font-weight: bold;
						font-style: italic;
						margin-left: 10px;
					}
					#left-side h3{
						color: #fff;
						position: absolute;
						top:300px;
					}
					input{
						color:#848484;
					}
					input:active{
						color:#fff;
					}
					
					
			</style>
	</head>

	<body>
		<div id="container">
			<div id="right-side">
					<form id="Loginform">
							<h3 class="ID">Your ID</h3>
							 	<input type="text" height="20" name="Login" value="admin@example.com" autocomplete="on" onfocus="this.value='';">
							<br>
							<h3 class="Password">Your Password</h3>
							<input type="Password" height="20" value="*********" autocomplete="on" onfocus="this.value='';">
							<br>
							<button type="submit">Enter</button>
							<a href="">Signup</a>
							<a href="">Help</a>
					</form>	
					<!--Filp Up ketika Sign up di klik-->
					<div id="Register">

					<form class="form1"> 
							<h5><i>Nama</i></h5>
							<input type="text" placeholder="Kalvin Krishna" autocomplete="on" onfocus="this.value='';">
							<h5><i>Alamat</i></h5>
							<input type="text" placeholder="Jalan Wuluh" autocomplete="on" onfocus="this.value='';">
							<h5><i>Alamat Email</i></h5>
							<input type="text" placeholder="krishna@example.com" autocomplete="on" onfocus="this.value='';">
							<h5><i>Institusi</i></h5>
							<input type="text" placeholder="Universitas Kristen Duta Wacana" autocomplete="on" onfocus="this.value='';">
							<h5><i>Nomer Telepon</i></h5>
							<input type="text" placeholder="+6285743699897" autocomplete="on" onfocus="this.value='';">
							<br>
														
					</form>
					<form class="form2">
							<h5><i>Id</i></h5>
							<input type="text" placeholder="Kalvin Krishna" autocomplete="on" onfocus="this.value='';">
							<h5><i>Password</i></h5>
							<input type="password" placeholder="Kalvin Krishna" autocomplete="on" onfocus="this.value='';">
							<button id="submit">Daftar</button>
					</form>
						
					</div>
			</div>


			<div id="ClientProfile">
						<form>
								<img id="uploadPreview" src="#"style="width: 300px; height: 300px;" />
								<div id="NamaUser">
									<h2>User</h2>
									<hr>

									<table>
										<tbody>
											<tr>
													<td>Nama: </td>
													<td>Krishna</td>
											</tr>

											<tr>
													<td>Umur: </td>
													<td>18 tahun</td>
											</tr>

											<tr>
													<td>Alamat: </td>
													<td>Yogyakarta</td>
											</tr>
											<tr>
													<td>Email: </td>
													<td>Krishna.Kalvin@gmail.com</td>
											</tr>
											<tr>
													<td>Nomer-HandPhone: </td>
													<td>081539989766</td>
											</tr>
										</tbody>
									</table>
									Change Image: <input id="uploadImage" type="file" name="myPhoto" autocomplete="on" onchange="PreviewImage();"/> 
								</div>
								<hr>
								<a href="Profile.html" style="text-decoration:none;"><span>To Profile</span></a>
								<script type="text/javascript">

								   function PreviewImage() {
								        var oFReader = new FileReader();
								        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

								        oFReader.onload = function (oFREvent) {
								            document.getElementById("uploadPreview").src = oFREvent.target.result;
								        };
								    };

								</script>
														

						</form>
			</div>
	
			<div id="left-side">
					<h2 style="padding:5px;color:#fff;" align="right">Login Form</h2>

					<h3>" <i>Share Your Movie And Get More Friend</i>"
						  <br><br><span style="margin:30%">With</span>
						  <a href="index.php" style="margin-left:28%;" title="Movie-Cloud"><img src="img/logo2.png" id="MovieCloudLogo" width="50px" height="35px"></a>
					</h3>
			</div>
			
		</div>

		<div id="stateMent">
				<h5>Thanks For Login</h5>	
		</div>
	</body>
</html>