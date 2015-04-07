<style type="text/css">
	#SignInRequitment{
		width: 100%;
		height: 500px;
		padding: 80px 20px 20px;
	}
	#frameDalem{
			width: 80%;
			height: 80%;
			margin: auto;
			position: relative;
	}
	#frameDalem>div{
		position: absolute;
		left: 30%;
		top: 50%;
	}
	#frameDalem>div>button{
		width: 200px;
		height: 100px;
	}
</style>
<?php
echo"
	<div id='SignInRequitment'>
			<div id='frameDalem'>
					<div>
						<button type='button' value='SignIn' class='UserManagement'>SignIn</button>
						<button type='button' value='SignUp' class='UserManagement'>SignUp</button>
					</div>
			</div>
					
</div>

";



?>
