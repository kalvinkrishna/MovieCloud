<script type="text/javascript">
		$(document).ready(function(){
			$("#search").addClass("friendsearch");
			
			$("#search.friendsearch").on('input',function(){
		      $x=$("#search").val();
	
		      $.get("Profile/SearchFriend.php",{input:$x},
		            function(data){
		            	if($x!=''){
		            		$("#FriendLe").html(data);
		            	}
		            	else{
		            		$("#FriendLe>div").remove();
		            		$("#FriendLe").load("Profile/SearchFriend.php");
		            	}
		            	
		            }
		        );
		    });

		});

</script>

<script type="text/javascript">
	$(".closeButtons").click(function(){
			$datadelete=$(this).parent().parent().children("span").html();
			$a=$(this).parent().parent();
			$.get("Profile/SearchFriend.php",{deletes:$datadelete},function(data){
				$("FriendLe").html(data);
			});
			$a.remove();
	});	
</script>
<style type="text/css">
		#FriendLe{
			margin-top:100px;
		}
		.closeWrapper{
			float: right;
			cursor: pointer;
		}
		.name-friend>h5{
			margin: 0px;
			padding: 0px;
		}

</style>
<?php
	
	include "../search/Search.php";
	echo"<div id='FriendLe'>";
	include"SearchFriend.php";
	echo "</div>";

?>



