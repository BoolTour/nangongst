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
<span class="action-span"></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---项目进度</span>
<div style="clear:both"></div>
</h1>
 <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" frame=box rules=none bordercolor="#99FF66">
    <tr class="tableHeader2">
        <td width="10%" align="center" height="15"><b>项目编号</b></td>
        <td width="10%" align="center"><b>项目名称</b></td>
        <td width="10%" align="center"><b>负责人</b></td>
        <td width="10%" align="center"><b>邮箱</b></td>
        <td width="10%" align="center"><b>项目开始时间</b></td>
        <td width="10%" align="center"><b>项目结束时间</b></td>
        <td width="15%" align="center"><b>项目进度</b></td>
        <td width="10%" align="center"><b>是否批准</b></td>
        <td width="10%" align="center"><b>操作</b></td>
    </tr>
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
    	<td align="center"><?php echo ($v['pro_id']); ?></td>
        <td align="center"><?php echo ($v['pro_name']); ?></td>
        <td align="center"><?php echo ($v['pro_people']); ?></td>
        <td align="center"><?php echo ($v['pro_email']); ?></td>
        <td align="center"><?php echo ($v['pro_starttime']); ?></td>
        <td align="center"><?php echo ($v['pro_endtime']); ?></td>
        <td align="center"><?php echo ($v['pro_plan']); ?>%</td>
        <td align="center">
        	<?php echo ($v['pro_admit']?'已批准':'待批准'); ?>
        </td>
        <td align="center">
            <a href="/index.php/Admin/Project/check/id/<?php echo ($v['pro_id']); ?>">审核</a>
            <a href="/index.php/Admin/Project/del/id/<?php echo ($v['pro_id']); ?>">删除</a>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
        <td colspan="9" align="right"><?php echo ($page); ?></td>
    </tr>
  </table>
<div id="footer">
版权所有 &copy; - 南工社团 - 
</div>
</body>
</html>