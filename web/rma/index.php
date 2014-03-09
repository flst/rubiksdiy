<?php
include_once("../inc/check_cookie.php");
include_once("../inc/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>魔板图DIY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<style>
#scrollUp {
  bottom: 20px;
  right: 20px;
  height: 38px;  /* Height of image */
  width: 38px; /* Width of image */
  background: url("../img/top.png") no-repeat;
}

#left-panel .nav-header {
	font-size:18px;
}
</style>
    <script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
  </head>

  <body">
  
  <input type="hidden" id="navli" value="li_rma">
  <?php include '../inc/header.php';?>

  <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9" style="width:845px">
<?php
$page=$_GET["p"];
$pageSize=10;

if($page=="")
{
	$page=1;
}

$sql="select * from rd_magic, rd_user where rd_magic.user_id = rd_user.user_id order by magic_id desc limit ".($pageSize *( $page-1)).",".$pageSize;
$result = mysql_query($sql);

/*&for($i=1;$i<=$pageSize *( $page-1);$i++)
{
   $row = mysql_fetch_array($result);
}*/

while ( $row = mysql_fetch_array($result) ) {
?>

		  <div class="hero-unit" style="padding:20px;">
            <div class="prepic-content"><span style="margin-right:35px; margin-left:10px;"><img src="save_image/<?php echo $row['magic_fileid']?>frontPre.jpg" style="width:460px;height:<?php if($row['magic_piece'] == 8) echo 230;else echo 115;?>px;"></span><span><img src="save_image/<?php echo $row['magic_fileid']?>backPre.jpg" style="width:250px;height:250px;" ></span></div>
			<div class="prepic-brief" >
				<div style="float:left;"><span>DIYer：<a href="#"><?php echo $row['user_account']?></a></span><span>作品名：<?php echo $row['magic_name']?></span><span>类型：<a href="#"><?php echo $row['magic_classify']?></a></span><span>板数：<a href="#"><?php echo $row['magic_piece']?></a></span></div>
			    <div class="btn-group" style="float:right;">
				 <button class="btn btn-action dropdown-toggle" data-toggle="dropdown">
			     下载<span class="caret"></span>				 </button>
			     <ul class="dropdown-menu">
				   <li><a href="down.php?f=<?php echo $row['magic_fileid']?>&n=0" target="_blank">正面-打印图</a></li>
				   <li><a href="down.php?f=<?php echo $row['magic_fileid']?>&n=1" target="_blank">正面-效果图</a></li>
				   <li><a href="down.php?f=<?php echo $row['magic_fileid']?>&n=2" target="_blank">背面-打印图</a></li>
				   <li><a href="down.php?f=<?php echo $row['magic_fileid']?>&n=3" target="_blank">背面-效果图</a></li>
				   <li class="divider"></li>
				   <li><a href="down.php?f=<?php echo $row['magic_fileid']?>" target="_blank">打包下载</a></li>
			     </ul>
				</div>
			</div>	
          </div><!--/hero-unit-->
<?php } ?>		
		<?php
        $sql="select * from rd_magic, rd_user where rd_magic.user_id = rd_user.user_id";
        $num = mysql_num_rows(mysql_query($sql));
        $pnum = floor($num/$pageSize) + 1;
        ?>
        <ul class="pager">
          <li class="previous<?php if($page==1){echo ' disabled'; }?>">
            <a<?php if($page!=1){echo ' href="?p='.($page-1).'"'; }?>>&larr; 前页</a>
          </li>
          <li class="next<?php if($page==$pnum){echo ' disabled'; }?>">
            <a<?php if($page!=$pnum){echo ' href="?p='.($page+1).'"'; }?>>后页 &rarr;</a>
          </li>
        </ul>	
 
 
        </div><!--/span-->
		<div id="left-panel" class="span3" style="width:270px">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">魔板DIY</li>
              <li><p><a class="btn btn-primary btn-large" style="width:200px" href="diy.php" target="_blank">现在去制作</a></p></li>
			   <li><p><a class="btn btn-large" style="width:200px"  target="_blank" disabled="disabled">分享自己的</a></p></li>
			  <li class="divider"></li>
              <li class="nav-header">制作工具教程</li>
              <li><p><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0','height','180','width','240','pluginspage','http://www.macromedia.com/go/getflashplayer','quality','high','src','http://player.youku.com/player.php/sid/XMTU3NDQ0NTY4/v','wmode','Opaque','movie','http://player.youku.com/player.php/sid/XMTU3NDQ0NTY4/v' ); //end AC code
</script><noscript><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" height="180" width="240"><param name="quality" value="high" /><param name="wmode" value="Opaque"><param name="movie" value="http://player.youku.com/player.php/sid/XMTU3NDQ0NTY4/v.swf" /><embed height="180" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="http://player.youku.com/player.php/sid/XMTU3NDQ0NTY4/v.swf" wmode="transparent" type="application/x-shockwave-flash" width="240"></embed></object></noscript></noscript></p>
			  <li class="nav-header">魔板绑线教程</li>
              <li><p><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0','height','180','width','240','pluginspage','http://www.macromedia.com/go/getflashplayer','quality','high','src','http://player.youku.com/player.php/sid/XOTU3NjI0MjA=/v','wmode','Opaque','movie','http://player.youku.com/player.php/sid/XOTU3NjI0MjA=/v' ); //end AC code
</script><noscript><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" height="180" width="240"><param name="quality" value="high" /><param name="wmode" value="Opaque"><param name="movie" value="http://player.youku.com/player.php/sid/XOTU3NjI0MjA=/v.swf" /><embed height="180" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="http://player.youku.com/player.php/sid/XOTU3NjI0MjA=/v.swf" wmode="transparent" type="application/x-shockwave-flash" width="240"></embed></object></noscript></noscript></p>
              <li><a href="#">图文教程</a></li>
			   <li class="divider"></li>
			   <li class="nav-header">有问有答</li>
               <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
		
      </div><!--/row-->


    </div> 
      

  <?php include '../inc/footer.php';?>
  <script src="../js/jquery.scrollUp.min.js"></script>
  <script>
      $(document).ready(function(){
                  $.scrollUp({
                  scrollName: 'scrollUp', // Element ID
                  topDistance: '300', // Distance from top before showing element (px)
                  topSpeed: 300, // Speed back to top (ms)
                  animation: 'fade', // Fade, slide, none
                  animationInSpeed: 200, // Animation in speed (ms)
                  animationOutSpeed: 200, // Animation out speed (ms)
                  scrollText: '', // Text for element
                  activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
          });
    </script>
  </div>
    <!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <a id="scrollUp" href="#top" title="" style="position: fixed; z-index: 2147483647; "></a>
  </body>
</html>
