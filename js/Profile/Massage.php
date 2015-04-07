<style type="text/css">
.MassageFriend{
	width: 80px;
	height: 80px;
}

</style>
<?php
	
	

	$userName='WahyuKutet';
	$Comment='alalalalal';
	$countCM=5;
	echo"
			<div id='PesanWrapper'>
				<div id='WrapperTwo'>
					

					<div id='PesanAreaO'>
	";
	$userM=array(
		'Krishna',
		'Ruru',
		'Irawan'
	);

	for($t=0;$t<3;$t++)
		echo"<img src='img/FriendList/kuntet.png' alt='' class='MassageFriend' id=".$userM[$t].">";




	echo "
					<div id='PesanArea'>

								<textarea placeholder='Masukan Pesan Kalian Untuk User Ini....'></textarea>
								<button style='position:absolute;right:100px;'>Comment</button>
					</div>

					<div id='PesanPList'>
	";

	echo"<br></br><span>$countCM Comment</span><br>";
	for($T=0;$T<$countCM;$T++){
		echo"
			<div class='CommentList'>
					<img src='img/FriendList/kuntet.png' alt=''/>
					<div id='leftPr'>
					<h3>$userName</h3>
					<p>$Comment</p>
					</div>
			</div>

		";
	}

	echo"			
					</div>
					</div>
				</div>
			</div>

	";
			
	

?>