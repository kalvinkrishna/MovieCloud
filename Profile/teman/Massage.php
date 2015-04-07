<?php
	session_start();
	include "../../dataBaseConnection.php";
	
			echo"
				<div id='PesanWrapper'>
						<div id='WrapperTwo'>
							<div id='PesanAreaO'>
			


							<div id='PesanArea'>

										<textarea id='valueComment' placeholder='Masukan Pesan Kalian Untuk User Ini....'></textarea>
										<button style='position:absolute;left:10px;bottom:0px;' id='submit'>Comment</button>
							</div>
							
							<div id='PesanPList'>
			";
					
			echo"

							</div>
							</div>
						</div>
					</div>
			";


?>

<style type="text/css">
.MassageFriend{
	width: 80px;
	height: 80px;
}
</style>
<script type="text/javascript">
		$(document).ready(function(){
				$("#submit").click(function(){
						$Comments=$("#valueComment").val();
						$val=
						$.post("teman/getDataComment.php",{Commentar:$Comments,submit:'yes'},
							function(data){
										$("#PesanPList").html(data);
							}
						);
						$("#valueComment").val('');

				});
				 setInterval(function(){
				 $.post('teman/getDataComment.php',{},  function(data) {
				    	$("#PesanPList").html(data);
				 });
				}, 1000);
		});

</script>



			