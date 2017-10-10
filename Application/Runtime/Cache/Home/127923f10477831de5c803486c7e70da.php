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
                <a href="/index.php/Home/Resoult/index">社团资源<span></span></a>
                <a href="/index.php/Home/Picture/index">社团相册<span></span></a>
                <a href="/index.php/Home/Note/index">社团留言<span></span></a>
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
    <link href="<?php echo (TIME_URL); ?>jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" language="javascript" src="<?php echo (TIME_URL); ?>jquery-1.7.2.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (TIME_URL); ?>jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (TIME_URL); ?>datepicker_zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (EDIT_URL); ?>ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (EDIT_URL); ?>ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (EDIT_URL); ?>lang/zh-cn/zh-cn.js"></script>
<div class="main">
	<div class="left">
		<div class="menu1">
			<h2><img src="<?php echo (IMG_URL); ?>channel_1.gif" /></h2>
			<ul>
				<li><a href="/index.php/Home/Project/index" title="项目列表" id="pro1">项目列表</a></li>
				<li><a href="/index.php/Home/Project/add" title="申报项目" id="pro2">申报项目</a></li>
				<li><a href="/index.php/Home/Project/lst" title="我的项目" id="pro3">我的项目</a></li>
                <li><a href="/index.php/Home/Project/member" title="项目组成员" id="pro4">项目组成员</a></li>
			</ul>
		</div>
	</div>
	<div class="right">
		<div class="position">您的位置是：<a href="#">首页</a>=><a href="#">社团项目</a></div>
		<div class="positioninfo">申报项目</div>
		<div class="mainarea">
			<form action="/index.php/Home/Project/add" method="post" name="form1">
                <table width="100%" border="0" cellspacing="1" cellpadding="3" class="message_add" >
                    <tr bgcolor="#FFFFFF">
                        <td width="80" align="right">项目名称：</td>
                        <td align="left">
                            <input type="text" name="pro_name" />&nbsp;<font class="red">*</font>
                        </td>
                        <td align="right">项目负责人：</td>
                        <td align="left">
                           <input type="text" name="pro_people" />&nbsp;<font class="red">*</font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td align="right">开始时间：</td>
                        <td align="left">
                            <input type="text" name="pro_starttime" id="pro_starttime"/>&nbsp;
                        </td>
                        <td align="right">结束时间：</td>
                        <td align="left">
                            <input type="text" name="pro_endtime" id="pro_endtime"/>&nbsp;
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td align="right">负责人邮箱：</td>
                        <td colspan="3" align="left">
                            <input type="email" name="pro_email" id="pro_email" />&nbsp;<font class="red">*</font>
                        </td>
                    </tr> 
                    <tr bgcolor="#FFFFFF">
                        <td align="right">项目描述：</td>
                        <td colspan="3" align="left">
                            <textarea name="pro_desc" cols="60" rows="10"></textarea>&nbsp;<font class="red">*</font>
                        </td>
                    </tr>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td height="30" colspan="4">
                          <input type="submit" value="   提   交   " />&nbsp;&nbsp;
                          <input type="reset" value="   重   置   " />
                        </td>
                    </tr>
                </table>
            </form>
		</div>
	</div>
</div>
<!--在项目描述中，可以使用uedit编辑器，但是由于空间的大小，不再使用-->
<script>
    $("#pro_starttime").datepicker({ dateFormat: "yy-mm-dd" });
    $("#pro_endtime").datepicker({ dateFormat: "yy-mm-dd" });

    UE.getEditor('pro_desc', {
    "initialFrameWidth" : "80%",     //宽
    "initialFrameHeight" : 80,     //高
    "maximumWords" : 3000,       //可以输入的字符数
    //"toolbars" : btn_basic
    });
</script>

<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript">
    $("form[name=form1]").submit(function(){
        //使用ajax来提交
        $.ajax({
            type:"POST",
            url:"/index.php/Home/Project/add",
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