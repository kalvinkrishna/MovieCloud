var idList='';
function enteringGroup(namaGroups){
	$namaGroup=namaGroups;
	$("#body-Create").load($namaGroup);

}
//Membuat Group Baru;
function CreateGroupS(){
	$.get(
					"Group/CreatingGroup.php",
					{
						namaGroup:$GName,
						GroupBanner:$Gpic,
						GroupDeskription:$Gdeskripsi
					},
					function(data){
							$("#form_create>div").addClass("Hilang");
							$("#form_create").append(data);
							$("#ListGroupping").show();
					}
	);
}
//Join Group
function joinned () {
	// body...
	//GetData User
	//Orang pertama yang masuk ke group di katakan admin.
	//ada kondisi yang harus di cek
	groupShow();
	$("#container-group").fadeOut(100);
	$("#JoineGroup").show();
	idList=$(this).attr('id');
	$temp=$(this).parent().attr('id');
	document.getElementById("ImageGroup").src=$("#"+$temp+">img").attr('src');	
}
function enterGroup(){
	groupShow();
}

function clearTextArea(){
	$("#CommentValue").val("");
}
function groupShow(){
	$("#ListGroupping").fadeOut(500);
	$("#body-Create").fadeIn(1000);
}
function listSHow(){
	$("#body-Create").fadeOut(500);
	$("#ListGroupping").fadeIn(1000);
}
function GlobalGroupListShow(){


		$.get(
					"Group/GroupList.php",
					{},
					function(data){							
							$("#GroupListTengah").html(data);
					}
		);

}
//Memunculkan Group List YANG DIMILIKI OLEH USER sebelah kanan

function GroupListShow(){

		$.get(
					"Group/OurGroupList.php",
					{},
					function(data){
							$("#OwnGroup>div").remove();
							$("#OwnGroup").html(data);
					}
		);
}
$(document).ready(function(){
	//MEMEUNCULKAN SEMUA GROUP YANG TELAH DI JOIN OLEH USER/ DIBUAT OLEH USER
	GroupListShow();
	GlobalGroupListShow();

	$("#SearchG-Button").click(function(){
			listSHow();
	});

	$("#Content>ul>li").click(function(){
		$("#Content>ul>li").removeClass("activeGMenu");
		$(this).addClass("activeGMenu");
	});

	$("#CreateGroup").click(function(){

		$("#ListGroupping").hide();
		$("#form_create").show();
		$("#form_create>div").removeClass("Hilang");

	});
	


	
	$("#body-Create").hide();
	$("#ListGroupping").show();
	clearTextArea();
	if($("#CommentBoxList>ul").children()>0){

	}
	else{
		commentNotReady();
		$("#Action").click(function(){
				var text = jQuery("textarea#CommentValue").val(); //ambil value dari text area
					if(text!="")
				    	commentReady(text);

					else
						alert("Cannot post Comment!");
					
				clearTextArea();
		});
		$(".active").click(function(){

		});

		$("#JoineGroup").click(function(){
			$("#container-group").fadeIn(100);
			$("#JoineGroup").hide();
			var a="#D"+idList;
			
			$(a).remove();


		});
	}
	$("#ListDis").addClass("active");
	$("#AddDiscust").hide();
	$("#listDiscus").show();
	//$("#CommentBoxList ul li:first-child").fadeOut(1000);

	/*Menu  Pojok Kiri Bawah*/

	//Untuk Memberi Warna pada tab
	$(".NavigAd li").click(function(){
		$(".NavigAd li").removeClass("active");
		$(this).addClass("active");

	});

	//Untuk Hasil Diskusi dan kasih warna pada div;
	$("#listDiscus div").click(function(){
			$("#listDiscus div").removeClass("active");
			$(this).addClass("active");
			$("#CommentBoxList").fadeOut(800);
			
	});

	$("#ListDis").click(function(){
			$("#listDiscus").fadeIn(300);
			$("#AddDiscust").fadeOut(300);
			//$("#ListFrame").attr('src',$linkVideo);
	});
	$("#AdDis").click(function(){
			$("#listDiscus").fadeOut(300);
			$("#AddDiscust").fadeIn(300);
			//$("#ListFrame").attr('src',$linkVideo);
	});
	$("#b_create_group").click(function(){
		$GName=$("#GroupName").val();
		
		$Gdeskripsi=document.getElementById("GroupDeskripsion").value;

		$Gpic=$("#group_pict").attr("src");
		//Membuat Group

		CreateGroupS();
		//Restore Ulang List Group Setelah di buat
		$("#OwnGroup").load("Group/OurGroupList.php");
		

	});

	//On Load Preview Image
	$("#b_browse_pic").on("change",function(){

			document.getElementById("group_pict").src="img/Group/"+$("#b_browse_pic").val();
	});


});

function commentNotReady(){
	$("#cekin").show(); 
	$("#CommentBoxList").hide();
}
$x=0;
function commentReady(text1){
	$("#cekin").hide();
	$("#CommentBoxList").show();
	
	$("#CommentBoxList ul").append("<li><div class='ListComment'><img src='' id='UserId'><div class='Comment'><h2 class='NameGU'>Nama</h2><div class='Pamor'><span id='Favorite'>Favorite</span><img src='img/flatIcon/happy14.png'><span id='Ratting'>Ratting</span><img src='img/flatIcon/snack.png'></div><div id='commentarWord'><p class='commentar'></p></div></div></div></li>");
	var text=document.getElementsByClassName("commentar");
	
	text[$x].id="C"+$x;
	text[$x].innerHTML=text1;
	$x++;
}
function changeTopik(){

}



