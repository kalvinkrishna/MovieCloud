<?php
$judul= array("krisna","tetete","tetotet","atetete","tetstet","etqtetet");
//Akan diubah dinamis dengan menggunakan database
				for($List=0;$List<sizeof($judul);$List++){
					echo"
											<div class='Discuss-Film' id='".$judul[$List]."'>
												<!--Sisipkan JavaScript disini-->
													<img src='img/Group/logo.jpg' class='Film-Identify' alt=''>
													<div class='DesDis' id='er".$List."'>
														<span class='JudulFilm'>".$judul[$List]."</span>
														<br>
														<span class='Disscuss'>Discuss</span>
													</div>
											</div>
											
					";


				}
echo "<div id='Buttonbottom'></div>";


/*
	
											<div class='Discuss-Film' id='Con2'>
												<!--Sisipkan JavaScript disini-->
													<img src='img/Group/logo.jpg' class='Film-Identify'>
													<div class='DesDis'>
														<span>TransFormer 3</span>
														<br>
														<span class='Disscuss'>Discuss</span>
													</div>
											</div>
											<div class='Discuss-Film' id='Con3'>
												<!--Sisipkan JavaScript disini-->
												<img src='img/Group/logo.jpg' class='Film-Identify'>
												<div class='DesDis'>
													<span>IronMan 3</span>
													<br>
													<span class='Disscuss'>Discuss</span>
												</div>
											</div>
*/

											
?>