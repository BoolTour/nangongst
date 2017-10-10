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
<a href="/index.php/Admin/Member/lst"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">成员列表</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---成员信息</span>
<div style="clear:both"></div>
</h1>
 <table width="45%" border="0" align="center" cellpadding="4" cellspacing="1">
 <form action="/index.php/Admin/Member/add" method="post" enctype="multipart/form-data">
 	<tr>
    	<td align="right" width="45%">姓名：</td>
        <td align="left" width="55%"><input type="text" name="name" /></td>
    </tr>
    <tr>
    	<td align="right" width="45%">年级：</td>
        <td align="left" width="55%"><input type="text" name="class" /></td>
    </tr>
    <tr>
    	<td align="right" width="45%">性别：</td>
        <td align="left" width="55%">
            <input type="radio" name="sex" value="男" /> 男
            <input type="radio" name="sex" value="女" /> 女
        </td>
    </tr>
    <tr>
    	<td align="right" width="45%">学号：</td>
        <td align="left" width="55%"><input type="text" name="sno" /></td>
    </tr>
    <tr>
    	<td align="right" width="45%">班级：</td>
        <td align="left" width="55%"><input type="text" name="direct" /></td>
    </tr>
    <tr>
    	<td align="right" width="45%">联系方式：</td>
        <td align="left" width="55%"><input type="text" name="mobile" /></td>
    </tr>
    <tr>
    	<td align="right" width="45%">所在公司：</td>
        <td align="left" width="55%"><input type="text" name="company" /></td>
    </tr>
    <tr>
    	<td align="right" >上传图片：</td>
        <td align="left"><input type="file" name="file" /></td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="提交" name="submit" class="myButton" />
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置" name="reset" class="myButton" />
        </td>
    </tr>
  </form>
  </table>
<div id="footer">
版权所有 &copy; - 南工社团 - 
</div>
</body>
</html>