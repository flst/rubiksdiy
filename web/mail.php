<?php

$to = "flst@qq.com";
$subject = "Test mail";
$message = "Hello! 嘿嘿，我的第一封邮件！";
$from = "service@joke.li";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>