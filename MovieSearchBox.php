<script type="text/javascript">
         $(document).ready(function(){
            $('#search').on('input',function(){
                if($("#search").val()==""){
                  $("#BodyComment").children().remove();
                  $("#BodyComment").load("data.php");
                }
                else{
                  
                  $("#BodyComment").children().remove();
                  $.post('data.php',{input:$("#search").val()},function(data){
                     $("#BodyComment").html(data);
                  });
               } 
                
            });


        });
        


</script>
<?php



		echo"
		<div id='wrapps'>
				<div id='wrap'>
				  <form action='' autocomplete='on'>
				     <input id='search' name='search' type='text' placeholder='What re we looking for ?'><input id='search_submit' value='Rechercher' type='submit'>
				  </form>
				</div>
		</div>
		";


?>


<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700);
@import url(https://raw.github.com/FortAwesome/Font-Awesome/master/docs/assets/css/font-awesome.min.css);

body {
	background: #DDD;
	font-size: 15px;
}
#wrapps{
	position: absolute;
	bottom: -84px;
	right: 0px;
}
#wrap {
  display: inline-block;
  position:relative;
  height: 60px;
  float: right;
  padding: 0;
}

#search[type="text"] {
  height: 60px;
  font-size: 55px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

#search[type="text"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

#search[type="text"]:focus {
  width: 700px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
#search_submit[type="submit"] {
  height: 67px;
  width: 63px;
  display: inline-block;
  color:red;
  float: right;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

#search[type="submit"]:hover {
  opacity: 0.8;
}

</style>