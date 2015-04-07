<script>
	$(document).ready(function(){
			$(".popUp ").click(function(){
				$("#VideoFrame").hide();
				$("#Movie-containers").fadeIn(200);
				$(".ReviewFrame").show();
				$temp=$(this).attr('src');
				$("#Film").attr('src',$temp);
			});
			$("#Player").click(function(){
				$(".ReviewFrame").hide();
				$("#VideoFrame").fadeIn(300);
				//$("#ListFrame").attr('src',$linkVideo);
			});
	});


</script>

<?php
	$judulFilm='test';
	$Genre=array('Action','Romance','Fiksi','commedy');

	$Action= array('img/Film/Action/1.jpg','img/Film/Action/2.jpg','img/Film/Action/3.jpg');
	$Romance=array('img/Film/Romance/1.jpg','img/Film/Romance/2.jpg','img/Film/Romance/3.jpg');
	$Fiksi=array('img/Film/Fiksi/1.jpg','img/Film/Fiksi/2.jpg','img/Film/Fiksi/3.jpg');
	$commedy=array('img/Film/Komedi/1.jpg','img/Film/Komedi/2.jpg','img/Film/Komedi/3.jpg');

	$Movie =array(
		$Action,$Romance,$Fiksi,$commedy
	);
	echo"<div id='wrapper-film-content'>";
	echo"<div class='content-film' id='Wrapper'>";
		for($x=0;$x<4;$x++){
			echo"<div class='ukuranTopRoll'>";
			for($j=0;$j<3;$j++)	
			echo"
				<img src=".$Movie[$x][$j]."  title=".$Genre[$x]." class='actionList popUp imgSize'  onclick='addToElement(".$x.",".$j.")' alt='' >
			";
			echo "</div>";
		}


	echo "</div>";
	echo "</div>";
																
												


?>