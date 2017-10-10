<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>main.css">
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>general.css">
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>resoult.css">
</head>
<body>
<h1>
<span class="action-span">
<a href="/index.php/Admin/News/add"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">添加消息</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---公告信息</span>
<div style="clear:both"></div>
</h1>
<div class="form-div">
</div>
 <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" frame=box rules=none bordercolor="#99FF66">
    <tr class="tableHeader2">
        <td width="15%" align="center" height="15"><b>发布人</b></td>
        <td width="10%" align="center"><b>公告标题</b></td>
        <td width="10%" align="center"><b>发布日期</b></td>
        <td width="10%" align="center"><b>操作</b></td>
    </tr>
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
        <td align="center"><?php echo ($v['name']); ?></td>
        <td align="center"><?php echo ($v['title']); ?></td>
        <td align="center"><?php echo ($v['date']); ?></td>
        <td align="center">
        	<a href="/index.php/Admin/News/more/id/<?php echo ($v['id']); ?>">详情</a>  
            <a href="/index.php/Admin/News/edit/id/<?php echo ($v['id']); ?>">修改</a> 
            <a href="/index.php/Admin/News/del/id/<?php echo ($v['id']); ?>">删除</a>           
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
        <td colspan="7" style="text-align:right;">
            <?php echo ($page); ?>
        </td>
    </tr>
  </table>
<div id="footer">
版权所有 &copy; - 南工社团 - 
</div>
</body>
</html>