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
		 	  <p class="input"><span class="label">Email</span><span>
		 	    <input name="reg_email" type="text" class="inputbox" id="reg_email" autocomplete="off" />
		 	  </span><span class="hint" id="email_hint">请填写真实的Email，用于登录和找回密码。</span><span id="email_err" class="err">err</span></span></p>
			  <p class="input"><span class="label">昵称</span><span><input name="reg_name" type="text" id="reg_name" class="inputbox" autocomplete="off" /></span><span class="hint" id="name_hint">给自己取个好听的名字吧！中英文都可以。 </span><span id="name_err" class="loading"></span></p>
			  
			  <p class="input"><span class="label">密码</span><span><input name="reg_pwd" type="password" id="reg_pwd" class="inputbox"/></span><span class="hint" id="pwd_hint">6-16位，可使用英文（区分大小写）、数字或符号 </span><span id="pwd_err" class="err">err</span></p>
			  
			  <p class="input"><span class="label">重复密码</span><span><input type="password" id="reg_repwd" class="inputbox"/></span><span class="hint" id="repwd_hint">请重复您刚才输入的密码，以便核对。 </span><span id="repwd_err" class="err">err</span></p>
			    
			  
			  <p class="dotted">以下内容选填，但有助于您看到适合您口味的笑话！</p>
			<p class="input"><span class="label">年龄段</span><span>
			<select name="reg_age" class="styled">
			  <option value="">请选择…</option>
			  <option value="0">18岁以下</option>
			  <option value="1">18-30岁</option>
			  <option value="2">30-50岁</option>
			  <option value="3">50岁以上</option>
			</select>
			   </span><span class="hint" id="repwd_hint">请重复您刚才输入的密码，以便核对。 </span><span id="repwd_err" class="err">err</span></p>
			   <p class="input"><span class="label">性别</span>
			   <span><input name="reg_gender" type="radio" value="0" class="styled" />男</span><span class="blank"></span><span><input name="reg_gender" type="radio" value="1" class="styled"/>女</span></p>
		 	</div>
			<div id="warp_footer">
			  <input type="image" src="../images/finish_reg.gif" name="Submit" value="提交" id="reg_submit" />
			</div>
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
