<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>main.css">
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>general.css">
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>resoult.css">
<body>
<h1>
<span class="action-span">
<a href="/index.php/Admin/News/lst"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">公告列表</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---公告管理</span>
<div style="clear:both"></div>
</h1>
<div class="form-div">

</div>
 <table width="45%" border="0" align="center" cellpadding="2" cellspacing="1">
 <form action="/index.php/Admin/News/add" method="post">
    <tr>
        <td align="right" width="45%">发布人：</td>
        <td align="left" width="55%"><input type="text" name="name" /></td>
    </tr>
    <tr>
        <td align="right" width="45%">公告标题：</td>
        <td align="left" width="55%"><input type="text" name="title" /></td>
    </tr>
    <tr>
        <td align="right">公告内容：</td>
        <td colspan="3" align="left">
            <textarea name="content" cols="60" rows="8"></textarea>&nbsp;
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="提交" class="myButton" />&nbsp;&nbsp;
            <input type="reset" name="reset" value="重置" class="myButton" />
        </td>
    </tr>
 </form>
 </table>
<div id="footer">
版权所有 &copy; - 南工社团 - 
</div>
</body>
</html>