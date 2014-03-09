<?php
include_once("../inc/check_cookie.php");
include_once("../inc/conn.php");

$magic_name = $_POST['magic_name'];
$magic_classify = $_POST['magic_classify'];
$magic_fileid = $_POST['magic_id'];
$magic_piece = $_POST['magic_piece'];

if($magic_name != "")
{

$sql="insert into rd_magic(user_id,magic_name,magic_classify,magic_fileid,magic_piece) VALUES ";
	$sql=$sql ."(2,";
	$sql=$sql . "'". $magic_name  ."',";
	$sql=$sql . "'". $magic_classify ."',";
	$sql=$sql . "'". $magic_fileid ."',";
	$sql=$sql . "". $magic_piece .")";
//echo $sql;
mysql_query($sql);

copy("tmpimage/".$magic_fileid."frontPre.jpg", "save_image/".$magic_fileid."frontPre.jpg");
unlink("tmpimage/".$magic_fileid."frontPre.jpg");

copy("tmpimage/".$magic_fileid."frontPrint.jpg", "save_image/".$magic_fileid."frontPrint.jpg");
unlink("tmpimage/".$magic_fileid."frontPrint.jpg");

copy("tmpimage/".$magic_fileid."backPre.jpg", "save_image/".$magic_fileid."backPre.jpg");
unlink("tmpimage/".$magic_fileid."backPre.jpg");

copy("tmpimage/".$magic_fileid."backPrint.jpg", "save_image/".$magic_fileid."backPrint.jpg");
unlink("tmpimage/".$magic_fileid."backPrint.jpg");
}

//echo $magic_name.$magic_classify.$magic_id;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分享你的魔板作品</title>
<script type="text/javascript" src="../js/forbid_fresh.js"></script>
</head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<body>
<?php include '../inc/header.php';?>

<div class="container pagination-centered">
<div class="">
    <h2>亲爱的 <em><?php echo $_SESSION["user_account"]?></em> ，分享魔板作品成功！</h2>
</div>
<a href="javascript:window.opener=null;window.open('','_self');window.close();"><button type="button" class="btn btn-success">关闭本窗口</button></a>
</div>

<?php include '../inc/footer.php';?>
<script src="../js/bootstrap-carousel.js"></script>
</body>
</html>