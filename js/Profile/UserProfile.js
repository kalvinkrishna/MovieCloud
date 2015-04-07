$(document).ready(function(){
			$("#ProfileRight").load("Profile/HomeProfile.php");//Saat awal load menampilkan profile.
			$("#Lpesan").click(function(){
				$("#ProfileRight").load("Profile/Massage.php");//massage
			});
			$("#LRoll").click(function(){
				$("#ProfileRight").load("Profile/HomeProfile.php");//video
			});
			$("#LBiodata").click(function(){
				$("#ProfileRight").load("Profile/MyProfile.php");//Biodata
			});
			$("#LPopularity").click(function(){
				$("#ProfileRight").load("Profile/Popularity.php");//Popularity
			});
			$("#LFriend").click(function(){
				$("#ProfileRight").load("Profile/FriendP.php");//Friend
			});
			$("#LChat").click(function(){
				
				$user=$("#ThisUser").html();
				$username=$("#ThisUserName").html();


				$.post('Profile/chat.php',{
				    userid: $user,
				    UsersName: $username
				}, function (data) { /* ... */ 
					$("#ProfileRight").html(data);
				});
				
				
			});
			$("#LSetting").click(function(){
				$("#ProfileRight").load("Profile/Setting.php");//Setting
			});
			$("#LGlobalUser").click(function(){
				$("#ProfileRight").load("Profile/GlobalUser.php");//Setting
			});
		

			
				$(document).ready(function(){
								$(".t").click(function(){
									$(".t").removeClass("ActiveMenu");								
									$(this).addClass("ActiveMenu");
								});

				});


});