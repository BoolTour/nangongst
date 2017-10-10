<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>修改数据</title>
</head>
<body>
	<form action="/index.php/Admin/User/edit/id/17" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo ($info['id']); ?>" />
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="username" value="<?php echo ($info['username']); ?>" /></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="password" value="XXXXX" /></td>
		</tr>
		<tr>
			<td>学号：</td>
			<td><input type="text" name="sno" value="<?php echo ($info['sno']); ?>" /></td>
		</tr>
		<tr>
			<td>邮箱：</td>
			<td><input type="text" name="email" value="<?php echo ($info['email']); ?>" /></td>
		</tr>
		<tr>
	        <td colspan="99" align="center">
	            <input type="submit" class="button" value=" 确定 " />
	            <input type="reset" class="button" value=" 重置 " />
	        </td>
	    </tr>
	</table>
	</form>
</body>
</html>