
<!--<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="header_naver">
      <div class="navbar_container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="padding:5px 8px 0px 8px ;"><img src="/img/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="text-align:left;">
            <li id="nav_cube_teacher" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">学习<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li id="nav_cube_teacher_software"><a id="a_cube_teacher_software" href="/cube_teacher">自学软件</a></li>
                 <li class="divider"></li>
                 <li id="nav_cube_teacher_tutorial"><a id="a_cube_teacher_tutorial" href="/cube_teacher/tutorial/">图文教程</a></li>
                 <li id="nav_cube_teacher_concept"><a  id="a_cube_teacher_concept" href="/cube_teacher/concept/">公式概念</a></li>
                 <li id="nav_cube_teacher_records"><a id="a_cube_teacher_records" href="/teacher_records/">学习记录</a></li>
                 <li id="nav_cube_teacher_setting"><a id="a_cube_teacher_setting" href="/teacher_setting/">设置</a></li>
               </ul>
             </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">练习<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li id="nav_timer"><a id="a_timer" href="/timer/">计时器</a></li>
                 <li class="divider"></li>
                 <li id="nav_timer_records"><a id="a_timer_records" href="/timer_records/">练习记录</a></li>
                 <li id="nav_timer_setting"><a id="a_timer_setting" href="/timer_setting/">设置</a></li>
               </ul>
             </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          -->
            <!--
              <input type="hidden" value="<?php echo getUrl();?>" id="signurl"></input>
              <?php if(isset($_SESSION["user_account"])){ ?><li><a href="/user/" class="navbar-link"><?php echo $_SESSION["user_account"]?></a> | <a href="../signout.php?url=<?php echo escape(getUrl());?>" class="navbar-link">退出</a></li>
              <?php }else{?><li><a href="#myModal" data-toggle="modal" class="navbar-link" id="nav_signin">登陆</a> </li>
              <?php } ?>
            
          </ul>
          
        </div>--><!--/.nav-collapse -->

         <!--<li role="presentation" class="active"><a href="#" onclick="location.reload()">重来</a></li>-->
     <!-- </div>

    </nav>-->

  <nav class="navbar navbar-default" id="header_naver">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="padding:8px 8px 0px 8px ;"><img src="/img/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="nav_cube_teacher" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">学习<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li id="nav_cube_teacher_software"><a id="a_cube_teacher_software" href="/cube_teacher">自学软件</a></li>
                 <li class="divider"></li>
                 <li id="nav_cube_teacher_tutorial"><a id="a_cube_teacher_tutorial" href="/cube_teacher/tutorial/">图文教程</a></li>
                 <li id="nav_cube_teacher_concept"><a  id="a_cube_teacher_concept" href="/cube_teacher/concept/">公式概念</a></li>
                 <li id="nav_cube_teacher_records"><a id="a_cube_teacher_records" href="/teacher_records/">学习记录</a></li>
                 <li id="nav_cube_teacher_setting"><a id="a_cube_teacher_setting" href="/teacher_setting/">设置</a></li>
               </ul>
             </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">练习<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li id="nav_timer"><a id="a_timer" href="/timer/">计时器</a></li>
                 <li class="divider"></li>
                 <li id="nav_timer_records"><a id="a_timer_records" href="/timer_records/">练习记录</a></li>
                 <li id="nav_timer_setting"><a id="a_timer_setting" href="/timer_setting/">设置</a></li>
               </ul>
             </li>
      </ul>
      <!--
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li>
         <input type="hidden" value="<?php echo getUrl();?>" id="signurl"></input>
              <?php if(isset($_SESSION["user_account"])){ ?><li><a href="/user/" class="navbar-link"><?php echo $_SESSION["user_account"]?></a> | <a href="../signout.php?url=<?php echo escape(getUrl());?>" class="navbar-link">退出</a></li>
              <?php }else{?><li><a href="#myModal" data-toggle="modal" class="navbar-link" id="nav_signin">登陆</a> </li>
              <?php } ?>
            
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
