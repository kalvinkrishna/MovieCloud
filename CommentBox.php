
<?php

echo"
	<div id='container-group'>

							<div class='containerGroup'>
								<div id='boxComentar'>
									<form>
										<!--Discuss Film yang aktif di klik dalam group-->
										<img src='img/Group/logo.jpg' width='50' height='50' title='JudulFilm' id='DiskusiFilmLogo'>
										<span id='Judul'>Cinta Dalam Hati</span>

									</form>
									<hr>
									<div id='CommentBox'>
										<textarea id='CommentValue' rows='3' cols='45'></textarea>	
										<button id='Action'>Action</button>
									</div>
								</div>
									
									<hr>
									<!--Dinamic-->
									<h3 id='cekin'>Tidak Ada Diskusi yang tersedia</h3>
									<div id='CommentBoxList'>
										<ul>
												<!--Tiap Kali List commentarnya akan di update secara dinamis-->
										</ul>
									</div>
							</div>
					
	";


echo "</div>";



?>