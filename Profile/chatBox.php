<script type="text/javascript">

	
	var iusername = $('#shout_username').html();
	var target=$(".Name").html();
	load_data = {'fetch':1,'username':iusername,'target':target};
	window.setInterval(function(){
	 

	 $.post('Profile/shout.php', load_data,  function(data) {
	 	
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var imessage = $(this).val();	
				post_data = {'username':iusername, 'message':imessage,'target':target};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('Profile/shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		$a=$($(this).parent().parent().children()[1]);

		
		var toggleState = $a.css('display');
		
		//toggle show/hide chat box
		$a.slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});

</script>
<?php
	if(isset($_REQUEST["UserTargets"])){
	echo "
		<div class='shout_box'>
			<div class='header'><span class='Name'>".$_REQUEST['UserTargets']."</span><div class='close_btn'>&nbsp;</div></div>
			  <div class='toggle_chat'>
			  <div class='message_box'>
			    </div>
			    <div class='user_info'>
			    	 
	";
			    		

		echo"
			  	
			   <input name='shout_message' id='shout_message' type='text' placeholder='Type Message Hit Enter' maxlength='100' /> 
			    </div>
			    </div>
		</div>";		

	}
	unset($_REQUEST["UserTargets"]);
?>