<?php
session_start();
include_once("../inc/conn.php"); 

$sql="select * from rd_user";
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>用户列表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

  </head>

<body">
<table>
<thead><tr><th>用户名</th><th>邮箱</th></tr></thead>
<tbody>
<?php while($row = mysql_fetch_array($result)){?>
<tr><td><?php echo $row["user_account"];?></td><td><?php echo $row["user_mail"];?></td></tr>		
<?php }?>
</tbody>
</table>
</body>
</html>