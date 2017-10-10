<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table cellpadding="3" cellspacing="1">
    	<tr>
            <th>用户名</th>
            <th>密码</th>
            <th>学号</th>
            <th>邮箱</th>
			<th width="120">操作</th>
        </tr>
		<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($v['username']); ?></td>
			<td>XXXXX</td>
			<td><?php echo ($v['sno']); ?></td>
			<td><?php echo ($v['email']); ?></td>
	        <td align="center">
	        	<a href="/index.php/Admin/User/edit/id/<?php echo ($v['id']); ?>">编辑</a>
                <a href="/index.php/Admin/User/del/id/<?php echo ($v['id']); ?>" onclick="return confirm('确定要删除吗？')">|删除</a>
	        </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <tr>
        	<td colspan="2" style="text-align:right;">
        		<?php echo ($page); ?>
        	</td>
        </tr> 
	</table>
</body>
</html>
<script>
	$("#start_time").datepicker({ dateFormat: "yy-mm-dd" });
	$("#end_time").datepicker({ dateFormat: "yy-mm-dd" });
</script>