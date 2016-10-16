<?php include_once("../inc/escape.php"); ?>
<?php include_once("../inc/get_url.php"); ?>
<?php
include_once("../inc/check_cookie.php");
include_once("../inc/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="/img/webicon.ico">
<link href="/css/bootstrap.min.css" rel="stylesheet">

<link href="timer.css" rel="stylesheet">

<title>魔方计时器</title>
</head>

<body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">魔方谷-timer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="text-align:left;">
            <li><a href="#">首页</a></li>
            <li class="active"><a href="#contact">计时器</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">二级页面 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
              <input type="hidden" value="<?php echo getUrl();?>" id="signurl"></input>
              <?php if(isset($_SESSION["user_account"])){ ?><li><a href="/user/" class="navbar-link"><?php echo $_SESSION["user_account"]?></a> | <a href="../signout.php?url=<?php echo escape(getUrl());?>" class="navbar-link">退出</a></li>
              <?php }else{?><li><a href="#myModal" data-toggle="modal" class="navbar-link" id="nav_signin">登陆</a> </li>
              <?php } ?>
            
          </ul>
          
        </div><!--/.nav-collapse -->


      </div>
    </nav>

<div class="container">
<div id="upset_cube" class="row" style="">
<div id="upset_cube_bar">
    <!--<div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        打乱 <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">WCA</a></li>
        <li class="divider"></li>
        <li><a href="#">三阶</a></li>
        <li><a href="#">四阶</a></li>
        <li><a href="#">五姐</a></li>
      </ul>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        类型 <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">WCA</a></li>
        <li class="divider"></li>
        <li><a href="#">三阶</a></li>
        <li><a href="#">四阶</a></li>
        <li><a href="#">五姐</a></li>
      </ul>
    </div>

    <div class="input-group" style="width:100px; float:right; position: relative; margin-right:30px;">
      <span class="input-group-addon">步长</span>
      <input type="text" class="form-control" placeholder="10" style="width:50px;">
    </div>-->

  </div><!--end of upset_cube_bar-->
  <div id="upset_cube_formula">
  </div><!--end of upset_cube_formula-->
  

</div><!--end of upset_cube-->

<div id="timer_value" style="font-size:8em; font-family:lcd1; padding-top:15px;" class="unselect">0.00</div>


<!--<form> 
<input type="button" value="开始计时！" id="timedCount" > 
<input type="button" value="停止计时！" id="stopCount" > 
</form> -->


 
<nav id="step_naver" class="navbar navbar-default navbar-fixed-bottom" role="navigation">
   <div style="text-align: center; padding-top:6px; height:200px;">
      <div class="row">
          
          <div class="col-md-4 col-xs-4" style="border-right:1px solid #ccc;">
            <div><h5>打乱图案</h5></div>  
            <div id="upset_cube_formula_png" style="margin-bottom:12px;"></div>

            <button type="button" class="btn btn-default btn-sm">设置魔方</button>
          </div>

          <div class="col-md-8 col-xs-8">
          <div><h5>历史记录</h5></div>
          <table class="table" style="font-size:12px;">
          <thead><tr><th>序号</th><th>时间</th><th>avg5</th><th>avg12</th></tr></thead>
          <tbody id="record_table">
            <tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>
            <tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>
            <tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>
            <tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>
            <tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>
          </tbody>
            
          </table>
          </div>
      </div>
   </div>
</nav>

</div> <!-- /container -->
<script src="/js/jquery.min.js"></script>
<!--<script src="/jquery_mobile/jquery.mobile-1.4.2.min.js"></script>-->
<script src="/js/bootstrap.min.js"></script>
<script src="timer.js"></script>

<script language="javascript">

  $(document).ready(function(){
    
    
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"  style="background-color: rgb(245, 245, 245); text-align: left;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">登陆或注册</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" value="" id="signurl">
<?php
include_once("../signtable.php");
?>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>
