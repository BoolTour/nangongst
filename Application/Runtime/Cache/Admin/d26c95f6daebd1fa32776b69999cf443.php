<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>修改数据</title>
</head>
<body>
	<form action="/index.php/Admin/System/edit/id/1" method="post">
	<input type="hidden" name="id" value="<?php echo ($info['id']); ?>" />
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="username" value="<?php echo ($info['username']); ?>" /></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="password" value="XXXX" /></td>
		</tr>
		<tr>
			<td>确认密码：</td>
			<td><input type="password" name="cpassword" value="XXXX"/></td>
		</tr>
		<tr>
			<td>角色：</td>
			<td>
				<select name='role_id'>
	                <?php if(is_array($role)): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['role_id'] == $info['role_id']): ?><option value="<?php echo ($v['role_id']); ?>" selected="selected"><?php echo ($v['role_name']); ?></option>
	                    <?php else: ?>
	                        <option value="<?php echo ($v['role_id']); ?>"><?php echo ($v['role_name']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	            </select>
			</td>
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