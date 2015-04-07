<?php
echo"
<div id='body-content-film'>
						<div id='movie-category'>
								<div id='navigasi-movie'>
									
										<br>
									<div id='BestReview'>
										<h1>Best Review</h1>
										<ul>
												<li class='movie-listnav BestReview Action'>Action</li>
												<li class='movie-listnav BestReview Komedi'>Komedi</li>
												<li class='movie-listnav BestReview Fiksi'>Fiksi</li>
												<li class='movie-listnav BestReview Romance'>Romance</li>
										</ul>
										<br>
									</div>
									<div id='TopWeek'>
										<h1>Top Week</h1>
										<ul>
												<li class='movie-listnav TopWeek Action'>Action</li>
												<li class='movie-listnav TopWeek Komedi'>Komedi</li>
												<li class='movie-listnav TopWeek Fiksi'>Fiksi</li>
												<li class='movie-listnav TopWeek Romance'>Romance</li>
										</ul>
									</div>
									<div id='BoxOffice'>
										<h1>Box Office</h1>
										<ul>
												<li class='movie-listnav BoxOffice Action'>Action</li>
												<li class='movie-listnav BoxOffice Komedi'>Komedi</li>
												<li class='movie-listnav BoxOffice Fiksi'>Fiksi</li>
												<li class='movie-listnav BoxOffice Romance'>Romance</li>
										</ul>
									</div>
								</div>
						 </div>
";?>
<?php
							
							 	include "search/Search.php";
							 echo"<div id='WWWfilm'>
							 	</div>
							 ";
												
?>

<?php
echo"						
						<div id='Movie-containers'>
							<div class='backGround'></div>
							<div class='Frame ReviewFrame'>
									<img src='tetet'  id='Film' alt=''>
									<div id='detailReview' class='PosDet'>
											<h2 id='FilmTitle'>JUDUL FILM</h2>	
											<hr>
											<table>
													<tbody>
															<tr>
																<td>Genre</td>
																<td>:</td>
																<td id='Genre'>Action</td>
															</tr>

															<tr>
																<td>Release</td>
																<td>:</td>
																<td id='Release'>2012</td>
															</tr>	

															<tr>
																<td>DIRECTOR:</td>
																<td>:</td>
																<td id='Director'>Jekichan</td>
															</tr>

															<tr>
																<td>Sinopsis</td>
																<td>:</td>
																<td><p id='Sinopsis'>Sebuah Film yang mengisahkan peperangan dijaman orde lama 
																		dalam dinasti cina, yang pada mulanya seorang biksu cina yang handal menjadikan 
																		dirinya sebagai jendral muda yang perkasa akan tetapi memeiliki sifat yang kurang terpuji</p>
																</td>
															</tr>		
														
													</tbody>	
											</table>
										
									</div>

									<img src='img/Logo/Play.png' id='Player'  onClick='' alt=''/>
							</div>
							<div class='Frame' id='VideoFrame'>
								<h2 id='TrailerJudul'>Trailer</h2>
								<iframe width='700' height='500' src='//www.youtube.com/embed/Ke1Y3P9D0Bc' allowfullscreen id='ListFrame' class='Action'></iframe>
							</div>
						</div>

				</div>";
?>