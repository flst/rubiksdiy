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
		 	  <p class="input"><span class="label">Email</span><span>
		 	    <input name="reg_email" type="text" class="inputbox" id="reg_email" autocomplete="off" />
		 	  </span><span class="hint" id="email_hint">����д��ʵ��Email�����ڵ�¼���һ����롣</span><span id="email_err" class="err">err</span></span></p>
			  <p class="input"><span class="label">�ǳ�</span><span><input name="reg_name" type="text" id="reg_name" class="inputbox" autocomplete="off" /></span><span class="hint" id="name_hint">���Լ�ȡ�����������ְɣ���Ӣ�Ķ����ԡ� </span><span id="name_err" class="loading"></span></p>
			  
			  <p class="input"><span class="label">����</span><span><input name="reg_pwd" type="password" id="reg_pwd" class="inputbox"/></span><span class="hint" id="pwd_hint">6-16λ����ʹ��Ӣ�ģ����ִ�Сд�������ֻ���� </span><span id="pwd_err" class="err">err</span></p>
			  
			  <p class="input"><span class="label">�ظ�����</span><span><input type="password" id="reg_repwd" class="inputbox"/></span><span class="hint" id="repwd_hint">���ظ����ղ���������룬�Ա�˶ԡ� </span><span id="repwd_err" class="err">err</span></p>
			    
			  
			  <p class="dotted">��������ѡ����������������ʺ�����ζ��Ц����</p>
			<p class="input"><span class="label">�����</span><span>
			<select name="reg_age" class="styled">
			  <option value="">��ѡ��</option>
			  <option value="0">18������</option>
			  <option value="1">18-30��</option>
			  <option value="2">30-50��</option>
			  <option value="3">50������</option>
			</select>
			   </span><span class="hint" id="repwd_hint">���ظ����ղ���������룬�Ա�˶ԡ� </span><span id="repwd_err" class="err">err</span></p>
			   <p class="input"><span class="label">�Ա�</span>
			   <span><input name="reg_gender" type="radio" value="0" class="styled" />��</span><span class="blank"></span><span><input name="reg_gender" type="radio" value="1" class="styled"/>Ů</span></p>
		 	</div>
			<div id="warp_footer">
			  <input type="image" src="../images/finish_reg.gif" name="Submit" value="�ύ" id="reg_submit" />
			</div>
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
