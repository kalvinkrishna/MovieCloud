<style type="text/css">
a.tooltip {outline:none; }
a.tooltip strong {line-height:30px;}
a.tooltip:hover {text-decoration:none;} 
a.tooltip span {
    z-index:10;display:none; padding:14px 20px;
    margin-top:-30px; margin-left:28px;
    width:300px; line-height:16px;
}
a.tooltip:hover span{
    display:inline; position:absolute; color:#111;
    border:1px solid #DCA; background:#fffAF0;}
.callout {z-index:20;position:absolute;top:30px;border:0;left:-12px;}
    
/*CSS3 extras*/
a.tooltip span
{
    border-radius:4px;
    box-shadow: 5px 5px 8px #CCC;
}
span strong{
	margin-left: 50px;
}
.imgpos{
	float: left;
}
.tm{
	margin-left: 20px;
}

</style>

<?php
if(isset($temp))
$sql = "SELECT commentarmovie.ID_COMMENTAR,commentarmovie.Commentar,user.UserName,user.Foto,user.Alamat,user.userId,commentarmovie.Movie From `commentarmovie` INNER JOIN user ON commentarmovie.Email=user.userId WHERE commentarmovie.Movie='".$temp."'";

else{
$sql = "SELECT commentarmovie.ID_COMMENTAR,commentarmovie.Commentar,user.UserName,user.Foto,user.Alamat,user.userId,commentarmovie.Movie From `commentarmovie` INNER JOIN user ON commentarmovie.Email=user.userId WHERE commentarmovie.Movie='2'";
}
$q=mysql_query($sql) or die(mysql_error());

?>
<?php
	if(mysql_num_rows($q)>0){
		while($hasil=mysql_fetch_assoc($q)){
								echo "
								<div class='Comment'>
										<div class='imgComment inlineblock'>
											<a href='Profile/OtherProfile.php?userid=".$hasil["userId"]."' class='tooltip'>
											<img src='img/Profile/".$hasil["Foto"]."' alt='nonImage' class='sizeOfImage'>
													<span>
												        <img class='callout sizeOfImage tm' src='img/Profile/".$hasil["Foto"]."' alt='no-image'/>
												       
												        <strong>".$hasil["UserName"]."</strong><br />
												        <strong>".$hasil["Alamat"]."</strong>

												    </span>
										</a>
										</div>
										<div class='CommentarUser inlineblock'>
												<h2>".$hasil["UserName"]."</h2>
												<span class='dateCommentar'>20/21/2014</span>
										</div>
										<hr>
										<div class='Paragraf'>
												<p>".$hasil["Commentar"]."</p>
										</div>	
								</div>
								";
							} 
}
?>