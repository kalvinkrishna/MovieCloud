<script type="text/javascript">
	$(document).ready(function(){
			$(".popUp ").click(function(){
				$("#VideoFrame").hide();
				$("#Movie-containers").fadeIn(200);
				$(".ReviewFrame").show();
				$temp=$(this).attr('src');
				$("#Film").attr('src',$temp);
				
				 document.getElementById("FilmTitle").innerHTML=$("#DjudulFIlm").html();
				 document.getElementById("Genre").innerHTML=$("#Genre").html();
				 document.getElementById("Release").innerHTML=$("#Realease").html();
				 document.getElementById("Sinopsis").innerHTML=$("#OverViewFilm").html();
				 document.getElementById("Director").innerHTML=$("#Director").html();
				 document.getElementById("ListFrame").src="//www.youtube.com/embed/"+$("#DLink").html();
				 document.getElementById("TrailerJudul").innerHTML=$("#DjudulFIlm").html();
			//	 document.getElementById("TrailerJudul").innerHTML=xTitle;

			});
			$("#Player").click(function(){
				$(".ReviewFrame").hide();
				$("#VideoFrame").fadeIn(300);
				//$("#ListFrame").attr('src',$linkVideo);
			});
	});
		

</script>

<?php
	include "dataBaseConnection.php";
	
		$name=$_REQUEST['name'];
		$filter=$_REQUEST["filter"];
		$query='';
		if($filter==''){
			$query="SELECT `Banner`,`OverView`,`Genre`,`JudulFilm`,`Realease`,`Link`,`Author` FROM reviewmovie WHERE `JudulFilm` LIKE '%".$name."%'";
		}
		else{
			$query="SELECT `Banner`,`OverView`,`Genre`,`JudulFilm`,`Realease`,`Link`,`Author` FROM reviewmovie WHERE `JudulFilm` LIKE '%".$name."%' AND Genre='$filter'";
		}
		
		$result=mysql_query($query) or die(mysql_error());
		$data=mysql_fetch_array($result);
		if($data){
			echo"
				<div>
					<img src='".$data["Banner"]."' alt='alall' class='ImagePreviews popUp'>
				</div>

				<span style='display:none;' id='OverViewFilm'>".$data["OverView"]."</span>
				<span style='display:none;' id='Realease'>".$data["Realease"]."</span>
				<span style='display:none;' id='Genres'>".$data["Genre"]."</span>
				<span style='display:none;' id='DjudulFIlm'>".$data["JudulFilm"]."</span>
				<span style='display:none;' id='DLink'>".$data["Link"]."</span>
				<span style='display:none;' id='Director'>".$data["Author"]."</span>
			";
		
		}
		else{
			echo"<h1 style='font-size:60px; color:#ffffff; text-align:center;'>Data Tidak Ada</h1>";
		}

?>
