<link rel="stylesheet" type="text/css" href="css/create_group.css">


<?php
	
	echo"
		<div id = 'form_create'>
			<div>
				<h1>Create New Group</h1>
			</div>
			<div id = 'form_dalam'>
				<img src='adasdasd.png' id= 'group_pict' alt=''>
				<div class = 'group_id'>
					Group Name 
				</div>
				<div class  = 'group_id'>
					<input type = 'text' id='GroupName'/><br><br>
					
				</div>
				<div class = 'group_id'>
					Description 
				</div>
				<div class = 'group_id'>
					<textarea id='GroupDeskripsion'></textarea>
				</div>
				<div id = 'browse'>
					Browse picture   
					<input id = 'b_browse_pic' type = 'file'>
				</div>
				<div id = 'b_create'>
				<input id = 'b_create_group' type ='button' value = 'Create Group' />
				</div>
			</div>
		</div>

	";

?>
