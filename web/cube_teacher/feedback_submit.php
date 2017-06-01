<?php
include_once("inc/conn.php"); 
$feedback_text = $_POST["feedback_text"];
$nickname = $_POST["nickname"];
$email = $_POST["email"];
//echo $feedback_text;
$sql="insert into ct_feedback(nickname,email,feedback,fd_time) values('".$nickname."', '".$email."', '".$feedback_text."','".date('Y-m-d H:i:s')."')";
$result = mysql_query($sql);
//echo mysql_result($result, 0);
?>