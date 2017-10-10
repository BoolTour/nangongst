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
<a href="/index.php/Admin/Member/add"><img src="<?php echo (ADMIN_IMG_URL); ?>icon_add.gif" align="left">添加成员</a></span>
<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1">---成员信息</span>
<div style="clear:both"></div>
</h1>
<div class="form-div">
<!--搜索用get的方式提交-->
  <form action="/index.php/Admin/Member/lst" method="GET">
  <input type="hidden" name="p" value="1" />
   <img src="<?php echo (ADMIN_IMG_URL); ?>icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    <select style="width:100px; height:22px;" name="select"> 
        <option value="name">姓名</option> 
        <option value="class">年级</option> 
        <option value="direct">班级</option> 
    </select>
    请输入：<input type="text" name="key" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
 <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" frame=box rules=none bordercolor="#99FF66">
    <tr class="tableHeader2">
        <td width="15%" align="center" height="15"><b>姓名</b></td>
        <td width="10%" align="center"><b>年级</b></td>
        <td width="10%" align="center"><b>性别</b></td>
        <td width="20%" align="center"><b>学号</b></td>
        <td width="10%" align="center"><b>班级</b></td>
        <td width="20%" align="center"><b>联系方式</b></td>
        <td width="20%" align="center"><b>操作</b></td>
    </tr>
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
    	<td align="center"><img src="<?php echo (ADMIN_IMG_URL); ?>member.gif" width="12" height="12" align="left"><?php echo ($v['name']); ?></td>
        <td align="center"><?php echo ($v['class']); ?></td>
        <td align="center"><?php echo ($v['sex']); ?></td>
        <td align="center"><?php echo ($v['sno']); ?></td>
        <td align="center"><?php echo ($v['direct']); ?></td>
        <td align="center"><?php echo ($v['mobile']); ?></td>
        <td align="center">
        	<a href="/index.php/Admin/Member/edit/id/<?php echo ($v['id']); ?>" style="font-family:楷体; color:#000; font-size:14px;"><b><img src="<?php echo (ADMIN_IMG_URL); ?>icon_edit.gif" width="16" height="16" border="0" alt="SEARCH"></b></a>&nbsp;&nbsp;
            <a href="/index.php/Admin/Member/del/id/<?php echo ($v['id']); ?>" style="font-family:楷体; color:#000; font-size:14px;"><b><img src="<?php echo (ADMIN_IMG_URL); ?>icon_trash.gif" width="16" height="16" border="0" alt="SEARCH"></b></a>
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