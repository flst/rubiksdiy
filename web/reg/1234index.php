<?php include_once("../inc/escape.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 bgitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-bgitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
	<meta http-equiv="Content-Language" content="zh-CN"/>
	<title>ע���Ϊ�½��� - Ц��¼ - Ц��¼����һ���ɿ���������Զ��֪�����õ�ʲô!</title>
	<meta name="Keywords" content="�ɿ�����Ц��¼�����Σ�Ц������Ц������ĬЦ��������Ц����Ц����ȫ������Ц����ȫ��СЦ��������Ц��������Ц������ƷЦ��"/>
	<meta name="Description" content="Ц��¼(joke.list)��һ��Ц�����Ρ�Ц��Ʒζ��վ�������������Ҫ����ʱ��ȥѰ�ң�ֻ��������һ�ΰ�ť�����Ϳ������ɵ�Ʒζ����Ц����������Խ�࣬���Ǿͻ�Խ׼ȷ���ṩ����������Ʒζ��Ц��"/>
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
              	<h2>ע���Ϊ�½���</h2>
            	</div>
		    	
			</div>
			<form method="post" id="form" name="form" action="../reg_finish/?url=<?php echo escape($_GET["url"]);?>" >
			<div id="check_finish">����д����Ϣ���������� </div>
     	 	<div id="warp_content" class="content">
		 	  <p class="input">&nbsp;</p>
			  �Բ���Ŀǰ�����ڲ�׶Σ�������ע��</div>
			<div id="warp_footer"></div>
			</form>
		</div>
		
	</div>
	<div id="right">
		<div id="warp" class="bg">
		  	<div id="warp_header">
            	<div id="warp_cap">
            	  <h2>������Ȩ</h2>
           	  </div>
		    	
			</div>
		 	<div id="warp_content">
				<h3>Ц������</h3>
				�����ѷ��������ۡ��ղص�Ц����<br /><br /><br />
				<h3>��¼����</h3>����¼��Խ�࣬����Խ�˽�����<br /><br /><br />
				<h3>����Ц��</h3>���һ����Ц����Ҳ�ɸı�����<br /><br /><br />
				<h3>����Ц��</h3>�����Լ���Ц����ӵ�и���ЦƷ��
		 	</div>
			<div id="warp_footer"></div>
		</div>
		
	</div>
	
  </div>

 <?php include_once("../inc/footer_1.html");?>

</body>
</center>
</html>
