<?php
     // 初始化session.
     session_start();
     /*** 删除所有的session变量..也可用unset($_SESSION[xxx])逐个删除。****/
     $_SESSION = array();
     /***删除sessin id.由于session默认是基于cookie的，所以使用setcookie删除包含session id的cookie.***/
     if (isset($_COOKIE[session_name()])) {
         setcookie(session_name(), '', time()-42000, '/');
     }
     // 最后彻底销毁session.
     session_destroy();
	 setcookie("_user_name",'',time()-42000, '/');
	 echo "<script language=javascript>";
 	 echo "	window.location='".$_GET["url"]."'";
	 echo "</script>";
?> 
