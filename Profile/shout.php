<?php
####### db config ##########

####### db config end ##########

if($_POST)
{
	//connect to mysql db
	include "../dataBaseConnection.php";
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    } 
	
	if(isset($_POST["message"]) &&  strlen($_POST["message"])>0)
	{
		$massageTo=$_POST["target"];
		//sanitize user name and message received from chat box
		//You can replace username with registerd username, if only registered users are allowed.
		$username = filter_var(trim($_POST["username"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		$message = filter_var(trim($_POST["message"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		$user_ip = $_SERVER['REMOTE_ADDR'];		
		mysql_query("INSERT INTO shout_box(user, message, ip_address,Massage_to) value('$username','$message','$user_ip','$massageTo')") or die(mysql_error());
		//insert new message in db
		// delete all records except last 10, if you don't want to grow your db size!
	}
	elseif($_POST["fetch"]==1)
	{	$user=$_POST["username"];
		$target=$_POST["target"];
		$results = mysql_query("SELECT user, message, date_time FROM (select * from shout_box ORDER BY id DESC LIMIT 10) shout_box  WHERE user='$user' OR Massage_to='$user' ORDER BY shout_box.id ASC") or die(mysql_error());
		while($row = mysql_fetch_array($results))
		{
			$msg_time = date('h:i A M d',strtotime($row["date_time"])); //message posted time
			echo '<div class="shout_msg"><time>'.$msg_time.'</time><span class="username">'.$row["user"].'</span> <span class="message">'.$row["message"].'</span></div>';
		}
	}
	else
	{
		header('HTTP/1.1 500 Are you kiddin me?');
    	exit();
	}
}
?>