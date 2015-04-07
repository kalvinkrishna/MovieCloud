var xmlDoc="lalala";
$(document).ready(function(){
	xmlDoc=loadXML();
});


function loadXML(){
	var xml;
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
 		 xml=new XMLHttpRequest();
  	}
		 
	xml.open("GET","xml/Movie.xml",false);

	xml.send();
	return xml.responseXML;
}


function addToElement(Jnumber,number){
		 $("#Movie-containers").fadeIn(500);
		 Jnumber=Jnumber;// index Jenis Movie;
		 number=number;//index ListMovie;
		 x=xmlDoc.getElementsByTagName("Movie");
		 //Tampung semua Element file XML 
 		 var xTitle=x[Jnumber].getElementsByTagName("MovieReview")[number].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue;
		 var xRealease=x[Jnumber].getElementsByTagName("MovieReview")[number].getElementsByTagName("RELEASE")[0].childNodes[0].nodeValue;
		 var xGenre=x[Jnumber].getElementsByTagName("MovieReview")[number].getElementsByTagName("GENRE")[0].childNodes[0].nodeValue;
		 var xdescription=x[Jnumber].getElementsByTagName("MovieReview")[number].getElementsByTagName("DESC")[0].childNodes[0].nodeValue;
		 var xActor=x[Jnumber].getElementsByTagName("MovieReview")[number].getElementsByTagName("DIRECTOR")[0].childNodes[0].nodeValue;
		 var xTRAILER=x[Jnumber].getElementsByTagName("MovieReview")[number].getElementsByTagName("TRAILER")[0].childNodes[0].nodeValue;


		 document.getElementById("FilmTitle").innerHTML=xTitle;
		 document.getElementById("Genre").innerHTML=xGenre;
		 document.getElementById("Release").innerHTML=xRealease;
		 document.getElementById("Sinopsis").innerHTML=xdescription;
		 document.getElementById("Director").innerHTML=xActor;
		 document.getElementById("ListFrame").src= xTRAILER;
		 document.getElementById("TrailerJudul").innerHTML=xTitle;

}
