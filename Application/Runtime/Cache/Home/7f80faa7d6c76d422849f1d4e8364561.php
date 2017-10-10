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
<div class="main">
	<div class="left">
		<div class="leftpic">
			<h3><img src="<?php echo (IMG_URL); ?>leftmenu.gif" width="238" height="32" /></h3>
			<ul>
			</ul>
		</div>
	</div>
	<div class="right">
		<div class="position">您的位置是：<a href="#">首页</a>=><a href="#">个人主页</a>=><a href="#">信息修改</a></div>
		<div class="positioninfo">信息修改</div>
		<div class="mainarea">
			<form action="/index.php/Home/Personal/xiugai/id/16" method="post" name="form1">
				<table width="100%" border="0" cellspacing="1" cellpadding="3" class="message_add">
				<tr bgcolor="#FFFFFF">
                	<td align="right">用户名：</td>
                	<td align="left">
                		<input type="text" name="username" value=<?php echo ($info['username']); ?> />
                	</td>
                </tr> 
                <tr bgcolor="#FFFFFF">
                	<td align="right">密码：</td>
                	<td align="left">
                		<input type="text" name="password" />
                	</td>
                </tr>
                <tr bgcolor="#FFFFFF">
                	<td align="right">邮箱：</td>
                	<td align="left">
                		<input type="text" name="email" value=<?php echo ($info['email']); ?> />
                	</td>
                </tr>
                <input type="hidden" name="id" value="<?php echo ($info['id']); ?>" />
                <tr bgcolor="#FFFFFF">
                    <td colspan="2" style="padding:0px 200px 0px 200px;">
                        <input type="submit" value="修改">&nbsp;&nbsp;
                        <input type="reset" value="重置">
                    </td>
                </tr>       
			</table>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript">
    $("form[name=form1]").submit(function(){
        //使用ajax来提交
        $.ajax({
            type:"POST",
            url:"/index.php/Home/Personal/xiugai/id/16",
            data:$(this).serialize(),  //收集表单数据
            dataType:"json",      //标记服务器返回的是json数据
            success:function(data){
                //data是从服务器返回的数据
                if(data.status==1){
                    alert(data.info);
                    location.href=data.url;
                }else{
                    alert(data.info);
                }
            }
        });
        return false;
    })
</script>

<!--页脚-->
<div class="footer">
<p>版权所有 &copy; - 南工社团 - </p>
</div>
</body>
</html>