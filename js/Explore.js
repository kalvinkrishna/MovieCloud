$(document).ready(function(){
    $a='';
	$("#Movie-containers").hide();
	$("#WWWfilm").load("TopRoll.php"); //Meload Film DiSaat 
    $("#WWWfilm").click(function(){
       $("ul>.movie-listnav").removeClass("ActiveMenu");
       $a='';
    });
    $("ul>.movie-listnav").click(function(){
    		$("ul>.movie-listnav").removeClass("ActiveMenu");
    		$(this).addClass("ActiveMenu");
            $a=$(this).html();
    });	
	//$("#WWWfilm").load("TopRoll.php");

    //On Type Show Data
    $("#search").on('input',function(){
        $x=$("#search").val();
        $.get("SearchData.php",{name:$x,filter:$a},
            function(data){
                if($x!='')
                 $("#Wrapper").html(data);
                 else{
                         $("#Wrapper>div").remove();
                         $("#Wrapper").load("TopRoll.php");  
                }   
            }
        );
    });




});

$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        $("#Movie-containers").fadeOut(300); 
    }
});


function ShowMovieFrame(){

    
}
