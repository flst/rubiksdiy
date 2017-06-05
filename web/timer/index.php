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
    <?php include_once("../inc/header_v1.php"); ?>


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

<div id="timer_value" class="unselect timer_stop_font_size">0.00</div>


<!--<form> 
<input type="button" value="开始计时！" id="timedCount" > 
<input type="button" value="停止计时！" id="stopCount" > 
</form> -->


 
<nav id="footer_naver" class="navbar navbar-default navbar-fixed-bottom" role="navigation">
   <div style="text-align: center; padding-top:6px; height:140px;">
      <div class="row">
          
          <div class="col-md-4 col-xs-4" style="border-right:1px solid #ccc;">
            <!--<div><h5>打乱图案</h5></div> -->
            <div id="upset_cube_formula_png" style="margin-bottom:12px;"></div>

            <button type="button" class="btn btn-default btn-sm">设置魔方</button>
          </div>

          <div class="col-md-8 col-xs-8">
          <!--<div><h5>历史记录</h5></div>-->
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
<script src="../cube_teacher/js/jquery.min.js"></script>
    <script src="../cube_teacher/js/bootstrap.min.js"></script>
    <script src="../cube_teacher/js/ie-emulation-modes-warning.js"></script>
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
   

</body>
</html>
