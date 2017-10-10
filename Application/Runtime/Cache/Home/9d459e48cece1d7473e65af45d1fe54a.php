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
		<div class="positioninfo">社团项目列表</div>
		<div class="mainarea">
			<table width="100%" border="0" cellspacing="1" cellpadding="3">
				<tbody>
                	<tr style="font-weight: bold;">
                        <td>编号</td><td>项目编号</td><td>项目名称</td><td>项目负责人</td>
                        <td>开始时间</td><td>结束时间</td><td>项目进度</td>
                        <td>操作</td>
                    </tr>
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr id="project">
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($v['pro_id']); ?></td>
                        <td><?php echo ($v['pro_name']); ?></td>
                        <td><?php echo ($v['pro_people']); ?></td>
                        <td><?php echo ($v['pro_starttime']); ?></td>
                        <td><?php echo ($v['pro_endtime']); ?></td>
                        <td><?php echo ($v['pro_plan']); ?>%</td>
                        <td><a href="/index.php/Home/Project/more/id/<?php echo ($v['pro_id']); ?>">查看详情</td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                        <td colspan="20" style="text-align: right;">
                            <?php echo ($page); ?>
                        </td>
                    </tr>
                </tbody>
			</table>
		<div class="backtop"><a href="#"><img src="<?php echo (IMG_URL); ?>top.gif" alt="回顶部" /></a></div>
		</div>
	</div>
</div>

<!--页脚-->
<div class="footer">
<p>版权所有 &copy; - 南工社团 - </p>
</div>
</body>
</html>