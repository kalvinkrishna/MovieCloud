<script type="text/javascript">
	$(".JoinList").click(joinned);

</script>
<?php
	include ('../dataBaseConnection.php');
	session_start();
	$jumlahMember=4;

	$NamaGroup = array('Pencinta Film Lawas','Film SpogeBob','Nickelodeon','Animasi 3GP','Animasi Bohai','Film Dewasa','Spiderman Return');
	$userName=$_SESSION["User_Email"];

	

		$query = "SELECT `NamaGroup`,`FotoGroup` from `group` where '1'";

		$result=mysql_query($query) or die (mysql_error());
					    // output data of each row

			if(mysql_num_rows($result) > 0){
				$x=0;
				while($row=mysql_fetch_assoc($result)){
					
					echo"<div class='ListGroups' id=DLG".$x.">
									<img src='".$row["FotoGroup"]."' class='imgListGroups' id=''>
									<div class='ContainerGroupName'>
										<span class='NamaGroup'>".$row["NamaGroup"]."</span></br>
										<span>member $jumlahMember</span>
									</div>
									<button class='JoinList' id=LG".$x.">Joined</button>

						<hr>
					</div>
					";
					$x++;
				}

			}	



?>