<?php include_once("../../inc/escape.php"); ?>
<?php include_once("../../inc/get_url.php"); ?>
<?php
include_once("../../inc/check_cookie.php");
include_once("../../inc/conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="魔方，复原，还原，教程，教学，公式，图解，口诀，最强魔方教程, 魔方教程">
    <meta name="description" content="这是一款三阶魔方初学者教学软件（魔方教程），可以手把手像一位老师一样，一步一步的教你复原魔方">
    <meta name="author" content="sunweiwei">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <link rel="SHORTCUT ICON" href="../img/webicon.ico">

    <title>完爆所有魔方教程，30分钟手把手教你复原-魔方教学软件、最强魔方教程</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    
    <script type="text/javascript" name="baidu-tc-cerfication" src="http://apps.bdimg.com/cloudaapi/lightapp.js#bffe21adcbed5fa38d0395965a479af7"></script><script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: '145ee1d9ef36af20f2399548'});</script>

    <style type="text/css">
    h3 {
		color: #2a6496;
		font-weight: bolder;
		margin-bottom:10px;
	}
	</style>
  </head>

  <body>
<?php
function CheckSubstrs($substrs,$text){
        foreach($substrs as $substr)
            if(false!==strpos($text,$substr)){
            return true;
        }
        return false;
}

function isMobile(){
    $useragent=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $useragent_commentsblock=preg_match('|\(.*?\)|',$useragent,$matches)>0?$matches[0]:'';
    
    $mobile_os_list=array('Google Wireless Transcoder','Windows CE','WindowsCE','Symbian','Android','armv6l','armv5','Mobile','CentOS','mowser','AvantGo','Opera Mobi','J2ME/MIDP','Smartphone','Go.Web','Palm','iPAQ');
    $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160×160','176×220','240×240','240×320','320×240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');
 
    $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) ||
    CheckSubstrs($mobile_token_list,$useragent);
 
    if ($found_mobile){
        return true;
    }else{
        return false;
    }
}
?>

<!-- hearder start -->
<?php include_once("../../inc/header_v1.php"); ?>

<!-- hearder stop -->

<div class="container">


<div style="text-align: center; ">
        		<h3>块的概念、面的概念</h3>
        		</b><br><img src="../img/basic_concept.png" width="100%">
        		<hr>
        		<h3>公式的基础概念</h3>
        <p><img src="../img/formula_1.jpg" width="100%"><br>
        		<img src="../img/formula_2.jpg" width="100%"></p>

</div>


      <div class="footer">
      	<div id="footer_content">
        <p>&copy; Copyright 风流沙驼,  Email: <a href="mailto:flst@qq.com">flst@qq.com</a>  访问主站：<a href="http://www.rubiksdiy.com/">http://www.rubiksdiy.com/</a><div>
		
        </p>
      	</div>
      </div> <!-- /footer_content -->

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/ie-emulation-modes-warning.js"></script>
</body>
</html>

  