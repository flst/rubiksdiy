<?php
include_once("../inc/check_cookie.php");
include_once("../inc/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分享你的魔板作品</title>
</head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<body>
<?php include '../inc/header.php';?>

<div class="container pagination-centered">
<div class="">
    <h1>分享你的魔板DIY作品</h1>
</div>

<?php 
$id = $_GET["id"];
$num = $_GET["n"];

//算尺寸
if($num == 0)
{
	$front_top = 0;
	$print_width = 1000;
	$print_left = 0;
	$print_top = (500 - 1000 / 841  *401) / 2;
	$left = (1000 - 500) / 2;
	$piece = 8;
}
else
{
	$front_top = (500 - 1000 / 1201  *401) / 2;
	$print_width = 500 / 801 * 641 ;
	$print_left = (1000 - $print_width) /2;
	$print_top = 0;
	$left = (1000 - 500) / 2;
	$piece = 12;
}
?>
<form class="form-horizontal" action="dealSavePic.php" method="post">
  <div class="control-group">
       <div class="controls" style="margin-left:0px;">
      <input type="text" id="inputName" name="magic_name" placeholder="给你的魔板图起个名字">
      <select class="span2"  placeholder="魔板名称" name="magic_classify">
  <option>未分类</option>
  <option>影视</option>
  <option>风景</option>
  <option>图案</option>
  <option>卡通</option>
  <option>其他</option>
</select>
<input type="hidden" name="magic_id" value="<?php echo $id;?>" />
<input type="hidden" name="magic_piece" value="<?php echo $piece;?>" />
 <button type="submit" class="btn btn-primary">现在分享</button>
    </div>
  </div>
  </form>


<div id="myCarousel" class="carousel slide" style="background-color:#888; height:500px; width:1000px; margin-left:85px;" data-interval="false">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img style="width:1000px; padding-top:<?php echo $front_top;?>px;" src="tmpimage/<?php echo $id;?>frontPre.jpg" alt="背面图" height="500px"/>
      <div class="carousel-caption">
        <h4><?php echo $piece;?>板 正面效果图</h4>
      </div>
    </div>
    <div class="item">
      <img style="width:<?php echo $print_width;?>px; padding-top:<?php echo $print_top;?>px; padding-left:<?php echo $print_left;?>px" src="tmpimage/<?php echo $id;?>frontPrint.jpg" alt="背面图"  height="500px"/>
      <div class="carousel-caption">
        <h4><?php echo $piece;?>板 正面打印图</h4>
      </div>
    </div>
    <div class="item">
      <img style="height:500px; padding-left:<?php echo $left;?>px;" src="tmpimage/<?php echo $id;?>backPre.jpg" alt="背面图"/>
      <div class="carousel-caption">
        <h4><?php echo $piece;?>板 背面效果图</h4>
      </div>
    </div>
    <div class="item">
      <img style="width:<?php echo $print_width;?>px; padding-top:<?php echo $print_top;?>px; padding-left:<?php echo $print_left;?>px" src="tmpimage/<?php echo $id;?>backPrint.jpg" alt="背面图"/>
      <div class="carousel-caption">
        <h4><?php echo $piece;?>板 背面打印图</h4>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
    
    
 <!--   <div class="tabbable"> Only required for left/right tabs
  <ul class="nav nav-tabs ">
    <li class="active"><a href="#tab1" data-toggle="tab">正面打印图</a></li>
    <li><a href="#tab2" data-toggle="tab">正面效果图</a></li>
    <li><a href="#tab3" data-toggle="tab">背面打印图</a></li>
    <li><a href="#tab4" data-toggle="tab">背面效果图</a></li>
  </ul>
  <div class="tab-content pagination-centered" style="height:300px;">
    <div class="tab-pane active" id="tab1">
      <p><img src="tmpimage/<?php echo $id;?>frontPre.jpg" width="50%" height="80%"/></p>
    </div>
    <div class="tab-pane" id="tab2">
      <p><img src="tmpimage/<?php echo $id;?>frontPrint.jpg" width="50%" height="80%"/></p>
    </div>
    <div class="tab-pane" id="tab3">
      <p><img src="tmpimage/<?php echo $id;?>backPre.jpg" width="25%" height="80%"/></p>
    </div>
    <div class="tab-pane" id="tab4">
      <p><img src="tmpimage/<?php echo $id;?>backPrint.jpg" width="50%" height="80%"/></p>
    </div>
  </div>
</div> -->
    

</div>

<?php include '../inc/footer.php';?>

<script src="../js/bootstrap-carousel.js"></script>
</body>
</html>
