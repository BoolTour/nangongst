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
<a href="/index.php/Admin/Resoult/add"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">添加资源</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---资源共享</span>
<div style="clear:both"></div>
</h1>
<div class="form-div">
    <form action="/index.php/Admin/Resoult/lst" method="GET">
        <input type="hidden" name="p" value="1" />
        <img src="<?php echo (ADMIN_IMG_URL); ?>icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
        <input type="text" name="filename" size="15" placeholder="名称" value="<?php echo I('get.filename'); ?>"/>
        <input type="submit" value="搜索" class="button" />
    </form>
</div>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" frame=box rules=none bordercolor="#99FF66">
    <tr class="tableHeader2">
        <td width="20%" align="center"><b>名称</b></td>
        <td width="10%" align="center"><b>上传者</b></td>
        <td width="20%" align="center"><b>上传日期</b></td>
        <td width="20%" align="center"><b>操作</b></td>
    </tr>
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr onMouseOver='this.className="tableRowMouseOver"' onMouseOut='this.className=""'>   
        <td align="center"><?php echo ($v['filename']); ?></td>
        <td align='center'><?php echo ($v['fileuploader']); ?></td>
        <td align='center'><?php echo ($v['filedate']); ?></td>
        <td align='center'>	
			<a href="/index.php/Admin/Resoult/download/id/<?php echo ($v['id']); ?>" style="font-family:楷体; color:#000; font-size:14px;"><b>下载</b></a>
            <a href="/index.php/Admin/Resoult/del/id/<?php echo ($v['id']); ?>" style="font-family:楷体; color:#000; font-size:14px;"><b>删除</b></a>
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