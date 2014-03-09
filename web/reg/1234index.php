<?php include_once("../inc/escape.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 bgitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-bgitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
	<meta http-equiv="Content-Language" content="zh-CN"/>
	<title>注册成为新嚼客 - 笑话录 - 笑话录就像一盒巧克力，你永远不知道你会得到什么!</title>
	<meta name="Keywords" content="巧克力，笑话录，漫游，笑话，冷笑话，幽默笑话、经典笑话、笑话大全、经典笑话大全、小笑话、成人笑话、短信笑话、极品笑话"/>
	<meta name="Description" content="笑话录(joke.list)是一个笑话漫游、笑话品味网站，在这里，您不需要花费时间去寻找，只需轻轻点击一次按钮，您就可以轻松的品味各种笑话，您看得越多，我们就会越准确的提供给您符合您品味的笑话"/>
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<link type="text/css" href="../css/all.css" rel="stylesheet" media="all" />
	<link type="text/css" href="../css/reg.css" rel="stylesheet" media="all" />
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/reg.js"></script>
	<script type="text/javascript" src="../js/custom-form-elements.js"></script>
</head>
<center>
<body>
<div id="outer">
	<div id="header">
		<?php include_once("../inc/header_1.php");?>
	</div>
	<div id="left">
		<div id="warp" class="bg">
		  	<div id="warp_header">
            	<div id="warp_cap">
              	<h2>注册成为新嚼客</h2>
            	</div>
		    	
			</div>
			<form method="post" id="form" name="form" action="../reg_finish/?url=<?php echo escape($_GET["url"]);?>" >
			<div id="check_finish">您填写的信息不完整…… </div>
     	 	<div id="warp_content" class="content">
		 	  <p class="input">&nbsp;</p>
			  对不起，目前处于内测阶段，不开放注册</div>
			<div id="warp_footer"></div>
			</form>
		</div>
		
	</div>
	<div id="right">
		<div id="warp" class="bg">
		  	<div id="warp_header">
            	<div id="warp_cap">
            	  <h2>嚼客特权</h2>
           	  </div>
		    	
			</div>
		 	<div id="warp_content">
				<h3>笑话本儿</h3>
				满载已发布、评论、收藏的笑话！<br /><br /><br />
				<h3>记录表情</h3>您记录的越多，我们越了解您！<br /><br /><br />
				<h3>评论笑话</h3>大家一起聊笑话，也可改编它！<br /><br /><br />
				<h3>发布笑话</h3>发布自己的笑话，拥有更高笑品！
		 	</div>
			<div id="warp_footer"></div>
		</div>
		
	</div>
	
  </div>

 <?php include_once("../inc/footer_1.html");?>

</body>
</center>
</html>
