<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" manifest="cache.manifest">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成员简历</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>bootstrap-responsive.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>common.css"/>
<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery2.js"></script>
<script type="text/javascript" src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>
<body>
	<div class="navbar-wrapper">
    	<div class="container">
        	<div class="navbar">  <!--修改颜色-->
            	<div class="navbar-inner">
                	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                   </button>
                   <a class="brand" href="#">南工社团</a>
                   <div class="nav-collapse collapse">
                    	<ul class="nav">
                  			<li><a href="/index.php/Home/Index/index">首页</a></li>
                			<li><a href="#intro">个人信息</a></li>
                			<li><a href="#contact">服务</a></li>                                                  
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo (IMG_URL); ?>intro/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>南工成员简历--</h1>
              <p class="lead">他们是我们学习的榜样。</p>
            </div>            
          </div>
        </div>
        <div class="item">
          <img src="<?php echo (IMG_URL); ?>intro/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>与南工共同成长--</h1>
              <p class="lead">南工是我们共同的骄傲。</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo (IMG_URL); ?>intro/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>南工人的精神--</h1>
              <p class="lead">每天进步一点点。</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
 <article class="container">
<section class="row" id="intro">
   		<div class="span12 panel relative" style="display: block;">
        	<img src="<?php echo (IMG_URL); ?>intro/ribbon-apple.png" class="ribbon-apple">
        	<div class="row">
                <div class="span6">
                    <div class="padding-large">
                            <h1>个人信息</h1>
                     </div>          <!--路径加载-->    
                	 <img src="<?php echo (SITE_URL); ?>Application/Public/Uploads/<?php echo ($info['filetrace']); ?>"  width="315" class="ipad-news" style="margin:28px;">
                </div>
                
                <div class="span6">
                <div class="padding-huge" style="margin-top:180px;">
                    <p class="wo" style="">
                    <ul style="list-style-type:none; font-size:18px; font-family:Microsoft YaHei;">
                    	<li style=" height:25px;">姓名：<?php echo ($info['name']); ?></li>
                        <li style=" height:25px;">班级：<?php echo ($info['direct']); ?></li> 
                        <li style="height:25px;">性别：<?php echo ($info['sex']); ?>
                        <li style=" height:25px;">学号：<?php echo ($info['sno']); ?></li>  
                        <li style=" height:25px;">所在公司：<?php echo ($info['company']); ?></li>    
                    </ul>   
                    </p>
                </div>
			</div>
		</div>
    </div>
    </section>
<section class="row" id="contact">
    	<div class="span12 panel" style="display: block;">
        	<div class="row">
                <div class="span12">
                	<div class="padding-large">
                    	<h1>服务</h1>
                        <div class="muiti-contact">
                            <span class="email"><email title="" data-toggle="tooltip" data-original-title="Email">www</email><at class="">.cnblogs.</at><sns title="" data-toggle="tooltip" class="" data-original-title="社交网络">com</sns><web title="个人网站" data-toggle="tooltip">/sharpxiajun</web></span>
                            <!--[if lt IE 9]>
                            <p class="text-warning">当前浏览器不支持该模块的交互效果，无法动态展示联系方式，建议换用更高级的浏览器。</p>
                            <p class="text-info">Twitter, Instagram, Path, 新浪微博、腾讯微博和微信的名称为 @dandyweng</p>
                            <![endif]-->
                        </div>
                    </div>
            	</div>
                
                <div class="span12">
                	<div class="padding-large">
                    	<div class="sns">
                            <div class="sns-container">
                                <a target="_blank" href="http://www.lianpula.cc/"><div title="" data-toggle="tooltip" class="sns-icon" id="icon-facebook" data-original-title="Facebook"><img src="<?php echo (IMG_URL); ?>intro/facebook.png"></div></a>
                                <a target="_blank" href="http://www.tui-te.com/"><div title="" data-toggle="tooltip" class="sns-icon" id="icon-twitter" data-original-title="Twitter"><img src="<?php echo (IMG_URL); ?>intro/twitter.png"></div></a>
                                <a target="_blank" href="http://www.instagramchina.com/"><div title="" data-toggle="tooltip" class="sns-icon" id="icon-instagram" data-original-title="Instagram"><img src="<?php echo (IMG_URL); ?>intro/instagram.png"></div></a>
                                <a target="_blank" href="javascript:;"><div title="" data-toggle="tooltip" class="sns-icon" id="icon-path" data-original-title="Path"><img src="<?php echo (IMG_URL); ?>intro/path.png"></div></a>
                            </div>
                            <div class="sns-container">              
                                <a target="_blank" href="http://s.weibo.com/"><div title="新浪微博" data-toggle="tooltip" class="sns-icon" id="icon-sinaweibo"><img src="<?php echo (IMG_URL); ?>intro/SinaWeibo.png"></div></a>
                                <a target="_blank" href="http://reg.t.qq.com/"><div title="腾讯微博" data-toggle="tooltip" class="sns-icon" id="icon-tencentweibo"><img src="<?php echo (IMG_URL); ?>intro/TencentWeibo.png"></div></a>
                                <a target="_blank" href="http://weixin.qq.com/"><div title="微信" data-toggle="tooltip" class="sns-icon" id="icon-wechat"><img src="<?php echo (IMG_URL); ?>intro/wechat.png"></div></a>
                                <a target="_blank" href="http://qzone.qq.com/"><div title="QQ空间" data-toggle="tooltip" class="sns-icon" id="icon-qq"><img src="<?php echo (IMG_URL); ?>intro/qq.png"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section>
    </article>
    <div class="container marketing">
      <footer>
        <p align="center">版权所有 &copy; - 南工社团 -</p>
      </footer>    
    </div>
</body>
</html>