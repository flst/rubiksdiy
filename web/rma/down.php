<?php
include_once("../inc/check_cookie.php");
include_once("../inc/conn.php");

if(isset($_GET['f'])){ 
	$filelist = array('frontPrint','frontPre','backPrint','backPre');
	$namelist = array('正面打印图','正面效果图','背面打印图','背面效果图');
	$fileid=$_GET['f'];//获取参数 
	$index=$_GET['n'];
	$filename = 'save_image/'.$fileid.$filelist[$index].'.jpg';
	
	
	$sql="select * from rd_magic where magic_fileid = '".$fileid."'";
	//echo $sql;
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	if(!isset($_GET['n']))
	{
		$savename = $row["magic_name"]."_".$row["magic_piece"]."板".".zip";
		$filename = "zip_files/".$fileid.".zip"; //最终生成的文件名（含路径）  
		if(file_exists($filename)){ 
			unlink($filename);
		}
		//重新生成文件  
		$zip = new ZipArchive();//使用本类，linux需开启zlib，windows需取消php_zip.dll前的注释  
		if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {  
			exit('无法打开文件，或者文件创建失败');  
		}  
		$attachmentDir="save_image/";
		foreach( $filelist as $key=>$val){  
			$pic_savename = $row["magic_name"]."_".$row["magic_piece"]."板_".$namelist[$key].".jpg";
			$attachfile = $attachmentDir . $fileid . $val .".jpg";    //获取原始文件路径  
			if(file_exists($attachfile)){  
				$zip->addFile( $attachfile , iconv('UTF-8','GBK',$pic_savename));//第二个参数是放在压缩包中的文件名称，如果文件可能会有重复，就需要注意一下  
			}  
		}  
		$zip->close();//关闭  
		
		header("Cache-Control: public");   
		header("Content-Description: File Transfer");   
		header('Content-disposition: attachment; filename='.$savename); //文件名  
		header("Content-Type: application/zip"); //zip格式的  
		header("Content-Transfer-Encoding: binary");    //告诉浏览器，这是二进制文件   
		header('Content-Length: '. filesize($filename));    //告诉浏览器，文件大小  
		@readfile($filename); 
	}
	else
	{
		$savename = $row["magic_name"]."_".$row["magic_piece"]."板_".$namelist[$index].".jpg";
		
		header("Cache-Control: public");   
		header("Content-Description: File Transfer");   
		header('Content-disposition: attachment; filename='.$savename); //文件名  
		header("Content-Type: image/jpeg"); //zip格式的  
		header("Content-Transfer-Encoding: binary");    //告诉浏览器，这是二进制文件   
		header('Content-Length: '. filesize($filename));    //告诉浏览器，文件大小  
		@readfile($filename); /**/
		//echo $savename;
	}
}
?>