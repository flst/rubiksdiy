<?php
session_start();
if(isset($_SESSION["user_account"])==false)
{
	if(isset($_COOKIE["_user_account"]))
	{
		$_SESSION["user_account"] = $_COOKIE["_user_account"];
		$_SESSION["user_id"] = $_COOKIE["_user_id"];
	} 
}
?>