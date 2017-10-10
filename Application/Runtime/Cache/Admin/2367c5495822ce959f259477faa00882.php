<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>资源共享</title>
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>main.css">
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>general.css">
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>resoult.css">
</head>
<body>
<h1>
<span class="action-span">
<a href="/index.php/Admin/Picture/add"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">添加相册</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---相册列表</span>
<div style="clear:both"></div>
</h1>
<div class="form-div">
</div>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" frame=box rules=none bordercolor="#99FF66">
    <tr class="tableHeader2">
        <td width="20%" align="center"><b>缩略图</b></td>
        <td width="10%" align="center"><b>描述</b></td>
        <td width="20%" align="center"><b>操作</b></td>
    </tr>
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr onMouseOver='this.className="tableRowMouseOver"' onMouseOut='this.className=""'>   
        <td align="center"><img src="<?php echo (SITE_URL); ?>Application/Public/Uploads/<?php echo ($v['file_small_pic']); ?>"></td>
        <td align='center'><?php echo ($v['filedesc']); ?></td>
        <td align='center'> 
            <a href="/index.php/Admin/Picture/del/id/<?php echo ($v['id']); ?>" style="font-family:楷体; color:#000; font-size:14px;"><b>删除</b></a>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
        <td colspan="6" style="text-align:right;">
            <?php echo ($page); ?>
        </td>
    </tr>
    </table>
<div id="footer">
版权所有 &copy; - 南工社团 - 
</div>
</body>
</html>