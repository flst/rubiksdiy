<?php
$dir = "tmpimage";  //文件夹路径
$filename=$_GET['name'].".jpg";  //文件名
 
$xmlstr =  $GLOBALS['HTTP_RAW_POST_DATA'];
if(empty($xmlstr)) $xmlstr = file_get_contents('php://input');
 
$jpg = $xmlstr;
$file = fopen("$dir/".$filename,"w");
fwrite($file,$jpg);
fclose($file);
?>