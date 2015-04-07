<link rel="stylesheet" type="text/css" href="Home/css/reset.css"/> 
<link rel="stylesheet" type="text/css" href="Home/css/style.css"/>

<script src="Home/js/modernizr.js"></script> 

<?php  
		echo"<div id='Top-side'>
                    <div id='LogoType'> 
                                            <img src='img/logonew.png' id='MovieCloudLogo' alt=''>       
                    </div>
                    <div id='nav'>
                                        <div id='navi-search'>
                                            <ul id='nav-inside'>
      ";

                                  //jika sudah login tampilan usermanagement berubah
                                   if(isset($_SESSION["User_Email"]) && isset($_SESSION["User_password"]) ||isset($_SESSION["Fb"])){
                                      $userFoto;
                                      if(isset($_SESSION["Fb"]))
                                        $userFoto="default_thumb.png";
                                      else{
                                        $userFoto=$_SESSION["User_Foto"];
                                      }
                                    
                                      echo"
                                           <li> <a href='Home.php' class='navbarlnk Home'>Home</a></li>
                                           <li> <a href='Explore.php' class='navbarlnk Explore'>Explore</a></li>
                                           <li> <a href='Event.php' class='navbarlnk Event'>Event</a></li>
                                           <li> <a href='CommentarMovie.php' class='navbarlnk Community'>Community </a></li>
                                           <li> <a href='UserProfile.php' class='navbarlnk Roll'>Profile</a></li>

                                           <li id='SignIn' class='UserManagement haslogin' >Sign In</li>
                                           <li id='SignUp' class='UserManagement haslogin'>Sign Up</li>
                                           <li><a href='logout.php'>LogOut</a></li>



                                           ";
                                      echo" <li id='UserFoto'><a href='UserProfile.php'><img id='Profile' src='img/Profile/".$userFoto."' alt=''/></a></li>";          
                                   }

                                   //sign up sign in masih muncul
                                   else{
                                     echo"
                                           <li> <a href='Home.php' class='navbarlnk Home'>Home</a></li>
                                           <li> <a href='Explore.php' class='navbarlnk Explore'>Explore</a></li>
                                           <li> <a href='' class='navbarlnk Event'>Event</a></li>
                                           <li> <a href='' class='navbarlnk Community'>Community </a></li>
                                           <li> <a href='' class='navbarlnk Roll'>Profile</a></li>

                                           <li id='SignIn' class='UserManagement' >Sign In</li>
                                           <li id='SignOut' class='UserManagement'>Sign Up</li>";
                                   }
    echo"
                                            </ul>
                                           
                                        </div>
                                           
                        </div>
                                
</div>";
   include "LoginForm.php";
?>

<script src="Home/js/main.js"></script>

