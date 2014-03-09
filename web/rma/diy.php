<?php
include_once("../inc/check_cookie.php");
include_once("../inc/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>魔板DIY工具</title>
<meta name="google" value="notranslate" />         
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css" media="screen"> 
   html, body  { height:100%; }
   body { margin:0; padding:0; overflow:auto; text-align:center; 
        background-color: #ffffff; }   
   object:focus { outline:none; }
   #flashContent { display:none; }
</style>
        
<link rel="stylesheet" type="text/css" href="../flex/rma/history/history.css" />
<script type="text/javascript" src="../flex/rma/history/history.js"></script>
<!-- END Browser History required section -->  
            
<script type="text/javascript" src="../flex/rma/swfobject.js"></script>
<script type="text/javascript">
	// For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection. 
	var swfVersionStr = "11.1.0";
	// To use express install, set to playerProductInstall.swf, otherwise the empty string. 
	var xiSwfUrlStr = "../flex/rma/playerProductInstall.swf";
	var flashvars = {};
	var params = {};
	params.quality = "high";
	params.bgcolor = "#ffffff";
	params.allowscriptaccess = "always";
	params.allowfullscreen = "true";
	params.wmode = "Opaque";
	var attributes = {};
	attributes.id = "RMA";
	attributes.name = "RMA";
	attributes.align = "middle";
	swfobject.embedSWF(
		"../flex/rma/RMA.swf", "flashContent", 
		"800", "550", 
		swfVersionStr, xiSwfUrlStr, 
		flashvars, params, attributes);
	// JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
	swfobject.createCSS("#flashContent", "display:block;text-align:left;");
</script>
</head>
<body>

<?php include '../inc/header.php';?>

<h1>制作你的魔板DIY作品</h1>


<!-- SWFObject's dynamic embed method replaces this alternative HTML content with Flash content when enough 
	 JavaScript and Flash plug-in support is available. The div is initially hidden so that it doesn't show
	 when JavaScript is disabled.
-->
<div id="flashContent">
<p>
	To view this page ensure that Adobe Flash Player version 
	11.1.0 or greater is installed. 
</p>
<script type="text/javascript"> 
var pageHost = ((document.location.protocol == "https:") ? "https://" : "http://"); 
document.write("<a href='http://www.adobe.com/go/getflashplayer'><img src='" 
                + pageHost + "www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a>" ); 
</script> 
</div>
        
<noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="550" id="RMA">
	<param name="movie" value="../flex/rma/RMA.swf" />
	<param name="quality" value="high" />
	<param name="bgcolor" value="#ffffff" />
	<param name="allowScriptAccess" value="always" />
	<param name="allowFullScreen" value="true" />
    <param name="wmode" value="Opaque">
        <embed wmode="transparent"></embed>
	<!--[if !IE]>-->
	<object type="application/x-shockwave-flash" data="../flex/rma/RMA.swf" width="800" height="550">
		<param name="quality" value="high" />
		<param name="bgcolor" value="#ffffff" />
		<param name="allowScriptAccess" value="always" />
		<param name="allowFullScreen" value="true" />
        <param name="wmode" value="Opaque">
        <embed wmode="transparent"></embed>
	<!--<![endif]-->
	<!--[if gte IE 6]>-->
		<p> 
			Either scripts and active content are not permitted to run or Adobe Flash Player version
			11.1.0 or greater is not installed.
		</p>
	<!--<![endif]-->
		<a href="http://www.adobe.com/go/getflashplayer">
			<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
		</a>
	<!--[if !IE]>-->
	</object>
	<!--<![endif]-->
</object>
</noscript>     

<?php include '../inc/footer.php';?>

</body>
</html>