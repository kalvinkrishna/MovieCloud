$(document).ready(function(){
			$("#ProfileRight").load("teman/HomeProfile.php");//Saat awal load menampilkan profile.
			$("#Lpesan").click(function(){
				$("#ProfileRight").load("teman/Massage.php");//massage
			});
			$("#LRoll").click(function(){
				$("#ProfileRight").load("teman/HomeProfile.php");//video
			});
			$("#LBiodata").click(function(){
				$("#ProfileRight").load("teman/MyProfile.php");//Biodata
			});
			$("#LPopularity").click(function(){
				$("#ProfileRight").load("teman/Popularity.php");//Popularity
			});
			$("#LFriend").click(function(){
				$("#ProfileRight").load("teman/FriendP.php");//Friend
			});
			


			
				$(document).ready(function(){
								$(".t").click(function(){
									$(".t").removeClass("ActiveMenu");								
									$(this).addClass("ActiveMenu");
								});

				});
});