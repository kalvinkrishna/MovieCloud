<script type="text/javascript">
		$(document).ready(function(){
			$("#search").addClass("Globalfriendsearch");
			
			$("#search.Globalfriendsearch").on('input',function(){
		      $x=$("#search.Globalfriendsearch").val();
		      
	
		      $.get("Profile/GlobalSearchFriend.php",{input:$x},
		            function(data){
		            	if($x!=''){
		            		$("#FriendLe").html(data);
		            	}
		            	else{
		            		$("#FriendLe>div").remove();
		            		$("#FriendLe").load("Profile/GlobalSearchFriend.php");
		            	}
		            	
		            }
		        );
		    });

		    $(".AddFriend").click(function(){
		    		
		    });

		});

</script>
<style type="text/css">
		#FriendLe{
			margin-top:100px;
		}
</style>
<?php
	include "../search/Search.php";
	echo"<div id='FriendLe'>";
	include"GlobalSearchFriend.php";
	echo "</div>";

?>