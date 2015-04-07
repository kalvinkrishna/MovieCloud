<?php
$MemberId='';//diambil dari database
$FotoMember='img/Profile/Inggar.png';//diambil dari database
echo"<div id='AnggotaMember'>";
		for($y=0;$y<5;$y++){
			echo "<img src='".$FotoMember."' title='".$MemberId."' class='MemberGroup' alt=''>";
		}
echo"</div>";


?>