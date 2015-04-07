<script type="text/javascript">
	function groupShow(){
		$("#ListGroupping").fadeOut(500);
		$("#body-Create").fadeIn(1000);
	}

	$(".Enter").click(function(){
		
		$tes=$(this).parent().attr('name');
		$test=$(this).parent().parent().attr('id');
		$a=$("#"+$test+">img").attr('src');//mengambil tag img child
		document.getElementById("ImageGroup").src=$a;
		document.getElementById("Judul").innerHTML=$tes;
		$("#NameGroup h2").html($tes);
		$("#container-group").show();
		groupShow();
		$("#JoineGroup").hide();
		$("#form_create").addClass("Hilang");
	});
</script>
<?php
	
	session_start();


		$user=$_SESSION["User_Email"];
		include "../dataBaseConnection.php";

		$query = "SELECT `NamaGroup`,`FotoGroup` from `group` where `Admin`='$user' OR `MemberGroup`='$user'";

		$result=mysql_query($query) or die (mysql_error());
					    // output data of each row

			if(mysql_num_rows($result) > 0){
				$id=0;
				while($row=mysql_fetch_assoc($result)){
					
				echo"
										<div class='Discuss-Film' id='Entering".$id."'>
														<!--Sisipkan JavaScript disini-->
															<img src='".$row["FotoGroup"]."' alt=''>
															<div class='DesDis' name='".$row["NamaGroup"]."'>
																<span class='Topik'>".$row["NamaGroup"]."</span>
																<br>
																<span class='Enter' id=''>Enter</span>
															</div>
									</div>";
									$id++;
				}

			}	

?>