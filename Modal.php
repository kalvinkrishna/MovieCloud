  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 
  <link rel="stylesheet" type="text/css" media="all" href="css/Modal/modal.css">
  <script type="text/javascript" src="js/Modal/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/Modal/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
  
<?php
      echo"

          <div id="loginmodal" style="display:none;">
              <h1>User Login</h1>
              <form id='loginform' name='loginform' method='post' action='#'>
                <label for='username'>Username:</label>
                <input type='text' name='username' id='username' class='txtfield' tabindex='1'>
                
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="txtfield" tabindex='2'>
                
                <div class='enter'><input type='submit' name='loginbtn' id='loginbtn' class='flatbtn-blu hidemodal' value='Log In' tabindex='3'></div>
              </form>
          </div>

      ";
  

?>

  
<script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
</script>
</body>
</html>