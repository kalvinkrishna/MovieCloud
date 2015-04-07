<script type="text/javascript">

	$(document).ready(function(){
			var genre="";
			$("#youtube").on("change",function(){
				$string =$("#youtube").val();
				document.getElementById("share").src="//www.youtube.com/embed/"+$string.substring(15,$string.length);
			});
			
			$("#Genre").on("change",function(){
				var e=document.getElementById("Genre");
				var x=e.options[e.selectedIndex].text;
				genre=x;
			});

			$("#Backbtn").click(function(){
					$("#ProfileRight").load("HomeProfile.php");
			});



			$("#banner").on("change",function(){	
				readURL(this);
			});

			function readURL(input) {
		            if (input.files && input.files[0]) {
		                var reader = new FileReader();

		                reader.onload = function (e) {
		                    $('#ImageRoll').attr('src', e.target.result);
		                }

		                reader.readAsDataURL(input.files[0]);
		            }
        	}
			

	});
</script>
<style type="text/css">
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 14px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cfccc;
  background-image: -webkit-linear-gradient(top, #3cfccc, #3498db);
  background-image: -moz-linear-gradient(top, #3cfccc, #3498db);
  background-image: -ms-linear-gradient(top, #3cfccc, #3498db);
  background-image: -o-linear-gradient(top, #3cfccc, #3498db);
  background-image: linear-gradient(to bottom, #3cfccc, #3498db);
  text-decoration: none;
}

</style>

<?php
	echo"<div id='RollMovies'>
			<div id='FrameUpload'>
		<iframe width='280' height='180' src='//www.youtube.com/embed/sadasdsd' allowfullscreen id='share' class='Framep Action'></iframe>";
	echo"
		
			<form method='post' action='Profile/Roll.php' enctype='multipart/form-data'>  
				<table>
					<tbody>
							<tr>
									<td>Judul Film: </td>
									<td><input name='JudulFIlm' id='JudulFilms' placeholder='JudulFilm' required></td>
							</tr>
							<tr>
									<td>Author: </td>
									<td><input name='Author' id='Authors' placeholder='Authors' required></td>
							</tr>
							<tr>
									<td>Tahun Realese: </td>
									<td><input name='realease' id='realeases' placeholder='10-10-2014' required></td>
							</tr>
							<tr>
									<td>Genre: </td>
									<td>
											<select name='genre' id='Genre'>
												<option value=-1></option>
												<option value='Action'>Action</option>
												<option value='Fiksi'>Fiksi</option>
												<option value='Adventure'>Adventure</option>
												<option value='Animation'>Animation</option>
												<option value='LoveStory'>LoveStory</option>
												<option value='Romance'>Romance</option>
												<option value='Komedi'>Komedi</option>
												<option value='Horror'>Horror</option>
											</select>
									</td>
							</tr>
							<tr>
									<td>Link: </td>
									<td><input name='YoutubeLink' id='youtube' placeholder='http://youtu.be/xxxxx'></td>
							</tr>
							<tr>
									<td>Banner: </td>
									<td>
											<input type='file' name='Banner' id='banner'>
									</td>
							</tr>
							<tr>	
								<td colspan='2'>
									<img src='' id='ImageRoll' alt='no-Image'></img>
								</td>
							</tr>
							<tr>
									<td>OverView: </td>
									<td><textarea name='OverView'></textarea></td>
							</tr>
							<tr>
							<td>
								<input id='mysubmit' class='btn' type='submit' name='action' value='Action'>
								<td>
								<td>
								<input id='Backbtn' class='btn'  name='back' value='Back'>
								<td>
							</tr>
							
					</tbody>	

				</table>

			</form>
				</div>
			</div>

	";

?>

<style type="text/css">
	#RollMovies{
		width: 100%;
		height: 100%;
		margin: auto;
		position: relative;
	}
	#FrameUpload{
		left: 300px;
		top:30px;
		position: absolute;
	}
	#FrameUpload>form>table{
		margin: auto;
	}
	#ImageRoll{
		width: 300px;
		height: 300px;
	}
</style>

