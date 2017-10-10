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
<a href="/index.php/Admin/Member/lst"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">成员列表</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---成员信息</span>
<div style="clear:both"></div>
</h1>
<div class="form-div">

</div>
 <table width="45%" border="0" align="center" cellpadding="2" cellspacing="1">
 <form action="/index.php/Admin/Member/edit/id/3" method="post">
 <input type="hidden" name="id" value="<?php echo ($info['id']); ?>" />
 	<tr>
    	<td align="right" width="45%">姓名：</td>
        <td align="left" width="55%"><input type="text" name="name" value="<?php echo ($info['name']); ?>"></td>
    </tr>
    <tr>
    	<td align="right">年级：</td>
        <td align="left"><input type="text" name="class" value="<?php echo ($info['class']); ?>"></td>
    </tr>
    <tr>
    	<td align="right">性别：</td>
        <td align="left"><input type="text" name="sex" value="<?php echo ($info['sex']); ?>"></td>
    </tr>
    <tr>
    	<td align="right">学号：</td>
        <td align="left"><input type="text" name="sno" value="<?php echo ($info['sno']); ?>"></td>
    </tr>
    <tr>
    	<td align="right">班级：</td>
        <td align="left"><input type="text" name="direct" value="<?php echo ($info['direct']); ?>"></td>
    </tr>
    <tr>
    	<td align="right">联系方式：</td>
        <td align="left"><input type="text" name="mobile" value="<?php echo ($info['mobile']); ?>"></td>
    </tr>
    <tr>
    	<td align="right">所在公司：</td>
        <td align="left"><input type="text" name="company" value="<?php echo ($info['company']); ?>"></td>
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