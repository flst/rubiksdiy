<?php include_once("../inc/escape.php"); ?>
<?php include_once("../inc/get_url.php"); ?>
<link rel="SHORTCUT ICON" href="../img/webicon.ico">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">

 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>          </a>
          <a class="brand" href="#" style="padding:5px 8px 0px 8px ;"><img src="../img/logo.png"></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
            <input type="hidden" value="<?php echo getUrl();?>" id="signurl">
            <?php if(isset($_SESSION["user_account"])){ ?>
              欢迎你 <a href="/user/" class="navbar-link"><?php echo $_SESSION["user_account"]?></a> | <a href="../signout.php?url=<?php echo escape(getUrl());?>" class="navbar-link">退出</a> </p>
            <?php }else{?>
              请 <a href="#myModal" data-toggle="modal" class="navbar-link"  id="nav_signin">登陆</a> | <a href="#myModal" data-toggle="modal" class="navbar-link" id="nav_signup">注册</a> </p>
            <?php }	?>
            <ul class="nav">
              <li id="li_rma"><a href="/rma/">魔板图设计助手</a></li>
              <li><a href="/cube_teacher/">魔方复原教程助手</a></li>
              <li><a class="on_build">公式壁纸</a></li>
              <li><a class="on_build">魔方贴纸</a></li>
			  <li id="li_blog"><a href="/blog/" target="_blank">博客</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <script src="/js/jquery.min.js"></script>
    <script language="javascript">

    $(document).ready(function(){
		$("#"+$("#navli").val()).addClass("active");
		$(".on_build").mouseover(function(){
			title = $(this).html();
	    	$(this).html("敬请期待");
			$(this).attr("style","color:#666666;");
			$(this).mouseout(function(){
				$(this).html(title);
				$(this).attr("style","");
			});	
		});
		
		$("#nav_signin").click(function(){
			$("#signin_form").show();
			$("#signup_form").hide();
		});
		
		$("#nav_signup").click(function(){
			$("#signup_form").show();
			$("#signin_form").hide();	
		});
	});
    </script>
   
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:620px;background-color:#f5f5f5; text-align:left;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">登陆或注册</h3>
  </div>
  <div class="modal-body">
    <input type="hidden" value="" id="signurl">
<?php
include_once("../signtable.php");
?>
  </div>
<!-- <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    <button class="btn btn-primary">Save changes</button>
  </div>-->
</div>