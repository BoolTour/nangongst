<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>南工社团</title>
    <link href="<?php echo (CSS_URL); ?>style.css" rel="stylesheet" type="text/css" />
</head>
<body class="index_body">
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo"src="<?php echo (IMG_URL); ?>logo.jpg" style="margin-left:40px;"></a>
            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE">
                        <div id="append_parent"></div>
                        欢迎来到南工社团&nbsp;
                        <?php if($_SESSION['user_name']!= ""): echo (session('user_name')); ?>|
                            <a href="/index.php/Home/User/logout">退出</a>
                        <?php else: ?>
                            <a href="/index.php/Home/User/login">登录</a>|
                            <a href="/index.php/Home/User/register">注册</a><?php endif; ?>                      
                    </font>
                </div>
                <div style="float: right;">
                    <?php echo date('Y-m-d H:i:s') ?>
                </div>
            </div>
            <div id="mainNav" class="clearfix">
                <a href="/index.php/Home/Index/index">首页<span></span></a>
                <a href="/index.php/Home/Project/index">社团项目<span></span></a>
                <a href="/index.php/Home/Member/index">社团成员<span></span></a>
                <a href="/index.php/Home/Resoult/index?id=5">社团资源<span></span></a>
                <a href="/index.php/Home/Picture/index">社团相册<span></span></a>
                <a href="/index.php/Home/Note/index?id=6">社团留言<span></span></a>
                <a href="/index.php/Home/Personal/index">个人中心<span></span></a>
            </div>
        </div>
        <div class="header_bg"></div>
        <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>banner.css" />
        <script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo (JS_URL); ?>banner.js"></script>
        <div class="indexmainimg">
            <div id="focus">
                <ul>
                    <li><a href=""><img src="<?php echo (IMG_URL); ?>roll_01.jpg"></a></li>
                    <li><a href=""><img src="<?php echo (IMG_URL); ?>roll_02.jpg"></a></li>
                    <li><a href=""><img src="<?php echo (IMG_URL); ?>roll_03.jpg"></a></li>
                </ul>
            </div>
        </div>
<!--加载页面主题内容-->
<link rel="stylesheet" href="<?php echo (CSS_URL); ?>main.css">
<script src="<?php echo (JS_URL); ?>scroll.js"></script>
<script src="<?php echo (JS_URL); ?>pic_turn.js"></script>

<div class="imain">
    <div class="news">
        <h3><a href="#"><img src="<?php echo (IMG_URL); ?>newstitle.gif" border="0" /></a></h3>
        <div class="pic">
           <p style="font-size:24px; font-family:'华文彩云',黑体; color:#F00; text-align:center;">南工简介</p><br>            
                <p style="font-size:12px;" align="left" class="box">
                    &nbsp;&nbsp;&nbsp;&nbsp;南工电脑网社团成立于2004年4月.2006年被授予南阳理工委员会优秀社团称号. 2011年在移动教研室的大力支持下开创首个学生主导的15#210实验室.
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;南工电脑网社团拥有12多年历史.我们社团紧跟时代的步伐.社团分成两大方向：移动和云计算.移动方向有：嵌入式、Android、IOS等,云计算方向有Hadoop、Openstack、Hbase、虚拟化技术等.当然社团成员也可以搞他们感兴趣的东西,例如：PHP、C++、HTML5、UI、PS等多元化发展.
                </p>
        </div>
        <div class="content">
            <div class="news_zi">
                <div class="hot">
                 <a href="#" title="关于社团最新发布的通知" class="title"><font class="dot">·</font>关于社团最新发布的的通知</a><br />
                &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                 <ul>
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="info"><a href="/index.php/Home/Index/news/id/<?php echo ($v['id']); ?>" target="_blank" class="title"><font class="dot">·</font><?php echo ($v['title']); ?>...</a>&nbsp;&nbsp;<span class="date">2017-01-08</span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="gonggao">
        <h3><a href="#"><img src="<?php echo (IMG_URL); ?>gonggao.gif" border="0" /></a></h3>
        <div class="content">
            <marquee behavior="scroll" direction="left"  scrollamount="3">
                <ul>
                    <li><img src="<?php echo (IMG_URL); ?>list.gif" alt=""><span>请大家爱护社团网站</span></li><br>
                    <li><img src="<?php echo (IMG_URL); ?>list.gif" alt=""><span>感谢您的关注，我们会更加努力的</span></li><br>
                    <li><img src="<?php echo (IMG_URL); ?>list.gif" alt=""><span>南工成员的精神：创新、奋斗</span></li><br>
                    <li><img src="<?php echo (IMG_URL); ?>list.gif" alt=""><span>咨询地点：15#210</span></li><br>

                </ul>
            </marquee>
        </div>
        <div class="jijiu"><a href="#" target="_blank"><img src="<?php echo (IMG_URL); ?>baozhi.jpg" border="0" /></a></div>
    </div>
</div>

<div class="zhuanjia">
    <h3><a href="#"><img src="<?php echo (IMG_URL); ?>zhuanjia.gif" border="0" /></a></h3>
    <div class="mid_bottom">
        <div id="scroll_div" class="scroll_div">
            <div id="scroll_begin">
                <ul>
                    <li><img src="<?php echo (IMG_URL); ?>scroll/t1.jpg" alt=""></li>
                    <li><img src="<?php echo (IMG_URL); ?>scroll/t2.jpeg" alt=""></li>
                    <li><img src="<?php echo (IMG_URL); ?>scroll/t3.jpg" alt=""></li>
                    <li><img src="<?php echo (IMG_URL); ?>scroll/t4.jpg" alt=""></li>
                    <li><img src="<?php echo (IMG_URL); ?>scroll/t6.jpg" alt=""></li>
                 </ul>
            </div>
          <div id="scroll_end"></div>
      </div>
    </div>
</div>

<script type="text/javascript">
function ScrollImgLeft(){
var speed=20
var scroll_begin = document.getElementById("scroll_begin");
var scroll_end = document.getElementById("scroll_end");
var scroll_div = document.getElementById("scroll_div");
scroll_end.innerHTML=scroll_begin.innerHTML
function Marquee(){
    if(scroll_end.offsetWidth-scroll_div.scrollLeft<=0)
      scroll_div.scrollLeft-=scroll_begin.offsetWidth
    else
      scroll_div.scrollLeft++
}
var MyMar=setInterval(Marquee,speed)
scroll_div.onmouseover=function() {clearInterval(MyMar)}
scroll_div.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
}
</script>
<script type="text/javascript">ScrollImgLeft();</script>



<!--页脚-->
<div class="footer">
<p>版权所有 &copy; - 南工社团 - </p>
</div>
</body>
</html>