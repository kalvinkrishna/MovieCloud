<script type="text/javascript">
	$(document).ready(function(){
		$("#Reset").click(function(){
			$value=$("#reset-email").val();
			if($value==""){
				$("#LostPassword").html("<span>Please Insert your Email</span>");
			}
			$.get("Home/valid.php",
				{emailvalid:$value},
				function(data){

					 	$("#LostPassword").html(data);
					 setTimeout(function(){

					 	$("#LostPassword").html("Thank you!!");
					 	
					 }, 5000);
					 setTimeout(function(){
					 	$("#LostPassword").html("Lost your password? Please enter your email address. You will receive a link to create a new password.");
					 },10000);	
				}

			);
		});
	

		//on type 

		$("#signin-email").on("input",function(){
			$fail=true;
			$angka=$("#signin-email").val();
			if($angka.length>10){
				$fail=false;
			}
			if($fail){
				$("#Emailinput").css({
					"color":"red",
					"font-size":"12px"
				});

				$("#Emailinput").html("*min 10 character");
			}
			else{
				$("#Emailinput").css({
					"color":"green",
					"font-size":"12px"
				});
				$("#Emailinput").html("*sukses");
			}

		});
	

		$("#signin-password").on("input",function(){
			$fail=true;
			$angka=$("#signin-password").val();
			if($angka.length>10){
				$fail=false;
			}
			if($fail){
				$("#PasswordInput").css({
					"color":"red",
					"font-size":"12px"
				});
				$("#PasswordInput").html("*min 10 character");
			}
			else{
				$("#PasswordInput").css({
					"color":"green",
					"font-size":"12px"
				});
				$("#PasswordInput").html("*sukses");
			}

		});

		$("#signup-email").on("input",function(){
			$fail=true;
			$angka=$("#signup-email").val();
			if($angka.length>10){
				$fail=false;
			}
			if($fail){
				$("#SignUpEmail").css({
					"color":"red",
					"font-size":"12px"
				});
				$("#SignUpEmail").html("*min 10 character");
			}
			else{
				$("#SignUpEmail").css({
					"color":"green",
					"font-size":"12px"
				});
				$("#SignUpEmail").html("*sukses");
			}

		});
		$("#signup-password").on("input",function(){
			$fail=true;
			$angka=$("#signup-password").val();
			$massage="*required";
			if($angka.length>10){
				$fail=false;
			}
			if($fail){
				$("#SignUpPassword").css({
					"color":"red",
					"font-size":"12px"
				});
				$massage="*min 10 character";
				$("#SignUpPassword").html($massage);
			}
			else{
				$("#SignUpPassword").css({
					"color":"green",
					"font-size":"12px"
				});
				$massage="*sukses";
				$("#SignUpPassword").html($massage);
			}

		});
		$("#signup-username").on("input",function(){
			$fail=true;
			$angka=$("#signup-username").val();
			$massage="*required";
			if($angka.length>5){
				$fail=false;
			}
			if($fail){
				$("#SignUpUserName").css({
					"color":"red",
					"font-size":"12px"
				});
				$massage="*min 10 character";
				$("#SignUpUserName").html($massage);
			}
			else{
				$("#SignUpUserName").css({
					"color":"green",
					"font-size":"12px"
				});
				$massage="*sukses";
				$("#SignUpUserName").html($massage);
			}

		});
		



	});
</script>
<?php
	echo"
	<div class='cd-user-modal'> <!-- this is the entire modal form, including the background -->
		<div class='cd-user-modal-container'> <!-- this is the container wrapper -->
			<ul class='cd-switcher'>
				<li><a href='#0'>Sign in</a></li>
				<li><a href='#0'>Sign Up</a></li>
			</ul>

			<div id='cd-login'> <!-- log in form -->
				<form class='cd-form' id='Biasa' method='post' action='Home/cekLogin.php' enctype='multipart/form-data'>
					<p class='fieldset'>
						<label class='image-replace cd-email' for='signin-email'>E-mail</label>
						<input class='full-width has-padding has-border' id='signin-email' type='text'  value='' placeholder='E-mail' name='sign-inEmail' required>
						<span class='error' id='Emailinput'>*required</span>
					</p>

					<p class='fieldset'>
						<label class='image-replace cd-password' for='signin-password'>Password</label>
						<input class='full-width has-padding has-border' id='signin-password' type='password'  value='' placeholder='Password' name='password' required>
						<a href='#0' class='hide-password'>Hide</a>
						<span class='error' id='PasswordInput'>*required</span>
						
					</p>

					<p class='fieldset'>
						<input type='checkbox' id='remember-me'>
						<label for='remember-me'>Remember me</label>
					</p>

					<p class='fieldset'>
						<input class='full-width' type='submit' value='Login'>
					</p>
					
					
				</form>
				<p class='fieldset'>
						";
						include "Home/fb.php";
					echo"
				</p>
				
				<p class='cd-form-bottom-message'><a href='#0'>Forgot your password?</a></p>
				<!-- <a href='#0' class='cd-close-form'>Close</a> -->
			</div> <!-- cd-login -->

			<div id='cd-signup'> <!-- sign up form -->
				<form class='cd-form' method='post' action='Home/SignUp.php' enctype='multipart/form-data'>
					

					<p class='fieldset'>
						<label class='image-replace cd-email' for='signup-email'>E-mail</label>
						<input class='full-width has-padding has-border' id='signup-email' type='email' value='' placeholder='E-mail' name='signUserId'>
						<span class='error' id='SignUpEmail'>*required</span>
					</p>

					<p class='fieldset'>
						<label class='image-replace cd-password' for='signup-password'>Password</label>
						<input class='full-width has-padding has-border' id='signup-password' type='password'  value='' placeholder='Password' name='signUserPassword'>
						<a href='#0' class='hide-password'>Hide</a>
						<span class='error' id='SignUpPassword'>*required</span>
					</p>

					<p class='fieldset'>
						<label class='image-replace cd-username' for='signup-username'>Username</label>
						<input class='full-width has-padding has-border' id='signup-username' type='text' value='' placeholder='Username' name='signUsername'>
						<span class='error' id='SignUpUserName'>*required</span>
					</p>

					<p class='fieldset'>
						<label class='image-replace cd-username' for='signup-userFoto'>Username</label>
						<input class='full-width has-padding has-border' id='signup-userFoto' type='file' value=''  name='signUserfoto'>
						
					</p>
					<input type='radio' id='Laki'>
					<label for='Laki'>Laki-Laki</label>
					<input type='radio' id='Perempuan'>
					<label for='Perempuan'>Perempuan</label>
				
					<p class='fieldset'>
						<label class='image-replace cd-username' for='signup-cdalamat'>Username</label>
						<input class='full-width has-padding has-border' id='signup-cdalamat' type='text'  value='' placeholder='Alamat' name='signUserAlamat'>
					</p>


					<p class='fieldset'>
						<input type='checkbox' id='accept-terms'>
						<label for='accept-terms'>I agree to the <a href='#0'>Terms</a></label>
					</p>

					<p class='fieldset'>
						<input class='full-width has-padding' type='submit' value='Create account' name='submit'>
					</p>



				</form>

				<!-- <a href='#0' class='cd-close-form'>Close</a> -->
			</div> <!-- cd-signup -->

			<div id='cd-reset-password'> <!-- reset password form -->
				<p class='cd-form-message' id='LostPassword'>Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class='cd-form'>
					<p class='fieldset'>
						<label class='image-replace cd-email' for='reset-email'>E-mail</label>
						<input class='full-width has-padding has-border' name='reset-email' id='reset-email' type='email' placeholder='E-mail'>
						<span class='cd-error-message'>Error message here!</span>
					</p>

					<p class='fieldset'>
						<input id='Reset' class='full-width has-padding' type='button' value='Reset password'>
					</p>
				</form>

				<p class='cd-form-bottom-message'><a href='#0'>Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href='#0' class='cd-close-form'>Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
";
?>