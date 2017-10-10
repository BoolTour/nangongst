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
<a href="/index.php/Admin/Project/lst"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">项目列表</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---成员信息</span>
<div style="clear:both"></div>
</h1>
<div class="form-div">

</div>
 <table width="45%" border="0" align="center" cellpadding="2" cellspacing="1">
 <form action="/index.php/Admin/Project/check/id/1" method="post">
    <tr>
        <td align="right">需求说明：</td>
        <td colspan="3" align="left">
            <textarea name="pro_remark" cols="60" rows="8"><?php echo ($info['pro_remark']); ?></textarea>&nbsp;
        </td>
    </tr> 
    <tr>
        <td align="right">是否批准：</td>
        <td>
             <?php if($info['pro_admit']==0): ?><input value="1" type="radio" name="pro_admit" />是&nbsp;
                <input value="0" checked="checked" type="radio" name="pro_admit"/>否&nbsp;
             <?php else: ?>
                <input value="1" checked="checked" type="radio" name="pro_admit" />是&nbsp;
                <input value="0" type="radio" name="pro_admit"/>否&nbsp;<?php endif; ?>
        </td>
    </tr>
    <tr>
        <td align="right">项目描述：</td>
        <td colspan="3" align="left">
            <textarea name="pro_desc" cols="60" rows="8"><?php echo ($info['pro_desc']); ?></textarea>&nbsp;
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