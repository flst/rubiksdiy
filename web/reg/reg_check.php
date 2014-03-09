<?php
include_once("../inc/conn.php") ;
include_once("../inc/unescape.php") ;
$val = unescape($_POST['val']); 
$val = trim($val);  
$field = trim($_POST['field']);  


$sql="select * from user where ".$field."='" . $val . "'";
$result = mysql_query($sql);

$row = mysql_fetch_array($result);
if($row)
{  
   echo "0";
}
else{
   echo "1";
}

?>
