<?php
session_start();
include_once("inc/conn.php"); 
//include_once("inc/escape.php");
$url=$_GET["url"];

if(false &&$url=="")
{
	header("Location: ../error/");
}
else
{
	$mail=trim($_POST["mail"]);
	$password=trim($_POST["password"]);
	$rememberme=$_POST["rememberme"];

	$sql="select * from rd_user where user_mail='".$mail."' and user_password='".md5($password)."'";

	if($row = mysql_fetch_array(mysql_query($sql)))
	{
		$_SESSION["user_account"] = $row["user_account"];
		$_SESSION["user_id"] = $row["user_id"];
		if($rememberme=='1')
		{
			//SetCookie("user_name", $row["name"], time()+2592000, "/jokli", ".phpuser.com", 0); 
			SetCookie("_user_account", $row["user_account"], time()+2592000, "/");
			SetCookie("_user_id", $row["user_id"], time()+2592000, "/");
		}	
   		$GoTo=$url;
		echo "1";
	}
	else
	{
		echo "0";
	}
}
?>
