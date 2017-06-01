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
    h3,h4 {
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


<div style="text-align: left; ">
        <?php
        	$content = array();
				$content[] = "<h4>第1步</h4>底层棱块（十字）复原，暂时需自己多练习，我们会尽量找出更适合新手理解的固定解法提供给大家：）<span class='hint'>魔方教程</span>";
				$content[] = "<h4>第2步</h4>1.在顶层找含有底面颜色（白色）的角块，然后通过顶层转动，将角块放在它目标位置的正上方，整个魔方沿y或y'转动，使得目标角块在F面与R面夹角。该过程，参考“调整公式”。
				<br> 2.判断白色面朝向，分别为 朝右，朝前，朝上，根据下图，做相应的“复原公式”
				<br><img src='../img/step_skill_2.png' width='100%'>
				<br> 3.若有角块藏在底层，可使用公式 (1)，将其置换到顶层<span class='hint'>魔方教程</span>";
				$content[] = "<h4>第3步</h4>1.在顶层找不含有顶面色（黄色）的棱块，然后通过顶层转动，将棱块放在与其侧面颜色一致的中心块位置，整个魔方沿y或y'转动，使得该中心块面向自己。该过程，参考“调整公式”。
				<br> 2.判断该棱块的目标位置是在左面，还是在右面，根据下图，做相应的“复原公式”
				<br><img src='../img/step_skill_3.png' width='100%'>
				<br> 3.若有棱块藏在第二层，整个魔方沿y或y'转动，可使得目标棱块在F面与R面夹角，并使用公式 (2)，将其置换到顶层<span class='hint'>魔方教程</span>";
				$content[] = "<h4>第4步</h4>
				1.下图为顶视图，图的正下方为前面，及朝向你的面，整个魔方沿y或y'转动，使得顶部黄色块图形与下图中其中任意一个一致。该过程，参考“调整公式”。
				<br> 2.调整后，做如下的“复原公式”
				<br><img src='../img/step_skill_4.png' width='100%'><span class='hint'>魔方教程</span>";
				$content[] = "<h4>第5步</h4>
				1.下图为顶视图，图的正下方为前面，及朝向你的面，整个魔方沿y或y'转动，使得顶部黄色块图形与下图中其中任意一个一致，图中魔方四周的黄色条，代表角块中黄色面的朝向。该过程，参考“调整公式”。
				<br> 2.调整后，做如下的“复原公式”
				<br><img src='../img/step_skill_5.png' width='100%'><span class='hint'>魔方教程</span>";
				$content[] = "<h4>第6步</h4>
				1.在顶层（第三层）的侧面（4个面），寻找一个侧面上，两个角块的颜色是一样的，找到后通过顶层转动，让该面朝向右手边。若全都不一样，则无需做该步骤。该过程，参考“调整公式”。
				<br> 2.完成第1步后，在做“复原公式”前，还需执行公式x'调整魔方，将顶面翻向自己做前面。该过程，参考“调整公式”
				<br> 3.调整后，直接做“复原公式”。
				<br> 4.做完公式后，需执行公式x恢复魔方姿态。该过程，参考“恢复调整公式”。
				<br> 5.若4个侧面角块的颜色都一样，则通过顶层转动调整角块颜色与中心块一致。完成该步骤复原过程
				<br><img src='../img/step_skill_6.png' width='100%'><span class='hint'>魔方教程</span>";
				$content[] = "<h4>第7步</h4>
				1.整个魔方沿y或y'转动，使得棱块中已复原的块背向自己（及在背面）。该过程，参考“调整公式”。
				<br> 2.调整后。直接做“复原公式”。
				<br><img src='../img/step_skill_7.png' width='100%'>
				<br> 3.若没有任何棱块是复原的，则无需调整魔方，直接做“复原公式”<span class='hint'>魔方教程</span>";
				for($i=0; $i<7; $i++)
				{
        			echo $content[$i];
        			echo "<br><hr>";
      			}
        ?>

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

  