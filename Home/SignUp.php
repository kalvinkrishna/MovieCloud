<?php
			
    function RandomId($length)
    { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rand= '';
        for ($i = 0; $i < $length; $i++) {
            $rand .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $rand;
    }
	include '../dataBaseConnection.php';

	if(!empty($_POST['submit'])){
			$sql='';
			$email=$_POST['signUserId'];
			$password=$_POST['signUserPassword'];
			$username=$_POST['signUsername'];	
			$alamat=$_POST['signUserAlamat'];
			$file=$_FILES['signUserfoto']['name'];
			$upload=$file;
			$uploads="../img/Profile/".$_FILES["signUserfoto"]["name"];
			move_uploaded_file($_FILES["signUserfoto"]["tmp_name"], $uploads);
		
			$userId=RandomId(4);

					$sql = "INSERT INTO `user` (Email,Password, UserName, Alamat,RollMovie,Foto,LevelUser,Experience,userId) VALUES ('$email','$password', '$username','$alamat',DEFAULT,'$upload',DEFAULT,DEFAULT,'$userId')";
			mysql_query($sql);
				
			if(mysql_error()){

				echo"<div id='ErrorNotif'><h1>ID yang anda masukan sudah ada silakan masukan kembali</h1></div>
					<br>
					<a href='../index.php'>Back</a>
				";
			}
			else{
				session_start();
				$_SESSION["User_Foto"]=$file;
				$_SESSION["User_Email"]=$_POST['signUserId'];
				$_SESSION["User_password"]=$_POST['signUserPassword'];
				$_SESSION["User_Name"]=$_POST['signUsername'];
				$_SESSION["User_Id"]=$userId;
				header("location:../Home.php");
			}
			
	}
?>