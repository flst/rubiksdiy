
   <style type="text/css">
        .form-signin {
        max-width: 510px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>

<form class="form-signin">
<div class="row">
    <div class="span3" style="border-right:solid 1px #eeeeee; padding-right:30px;">
        <div class="alert alert-block alert-error fade in hide" style="margin-bottom:5px; padding:5px;">
        	<p><i class="icon-exclamation-sign icon-white"></i> 邮箱或密码不正确</p>
        </div>
    	<div id="signin_form">
            <h4 class="form-signin-heading" style="float:left;">登陆</h4>
            <h4 id="signup_link" class="form-signin-heading" style="float:right;">注册 <i class="icon-circle-arrow-right" style="margin-top:4px;"></i></h4>
            <input type="text" class="input-block-level" placeholder="邮箱" id="singin_mail">
            <input type="password" class="input-block-level" placeholder="密码" id="singin_password">
            <div>
            <label class="checkbox" style="float:left;">
              <input type="checkbox" value="1" id="rememberme" name="rememberme"> 记住我
            </label>
            <span style="float:right;">忘记密码</span>
            </div>
            <button class="btn btn-large btn-primary" style="width:270px;" type="button" id="signin_btn">登陆</button>
        </div>
        
        <div id="signup_form">
            <h4 class="form-signin-heading" style="float:left;">注册</h4>
            <h4 id="signin_link" class="form-signin-heading" style="float:right;">登陆 <i class="icon-circle-arrow-right" style="margin-top:4px;"></i></h4>
            <input type="text" class="input-block-level" placeholder="邮箱">
            <input type="password" class="input-block-level" placeholder="密码">
            <input type="text" class="input-block-level" placeholder="昵称">
            
            <button class="btn btn-large btn-primary" style="width:270px;" type="submit">注册</button>
        </div>
        
    </div>  
 

</div>
</form>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/ie.js"></script>
    <script language="javascript">

    $(document).ready(function(){
		$("#signup_form").hide();
		
		$("#signup_link").mouseover(function(){
	    	$("#signup_link").css("cursor","pointer");
		});
		
		$("#signin_link").mouseover(function(){
	    	$("#signin_link").css("cursor","pointer");
		});
		 
		$("#signup_link").click(function(){
			$("#signin_form").hide(500);//hide()
			$("#signup_form").show(500);//hide()
		});
		
		$("#signin_link").click(function(){
			$("#signup_form").hide(500);//hide()
			$("#signin_form").show(500);//hide()
		});
		
		$("#signin_btn").click(function(){
			mail=$("#singin_mail").val();
			password=$("#singin_password").val();
			//alert(password);
			//return false;
			$.post("/signin.php",{mail:mail,password:password},function(result){
				//alert(result);
				if(result=="1"){
					//location.href = "rma/";
					if($("#signurl").val()=="")
						location.href = "rma/";
					else
						location.href = $("#signurl").val();
				}
				else
				{	
					$(".alert").show()
					//alert("用户名密码错误");
				}
			});
		});
	});
	


    </script>