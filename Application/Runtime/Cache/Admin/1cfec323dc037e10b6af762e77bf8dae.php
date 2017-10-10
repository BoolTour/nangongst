<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>管理员列表</title>
</head>
<body>
	<span style="float: right; margin-right: 8px; font-weight: bold;">
	    <a style="text-decoration: none;" href="/index.php/Admin/System/add">【添加管理员】</a>
	</span>
	<table cellpadding="3" cellspacing="1">
    	<tr>
            <th >账号</th>
			<th width="120">操作</th>
        </tr>
		<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($v['username']); ?></td>
	        <td align="center">
	        	<a href="/index.php/Admin/System/edit/id/<?php echo ($v['id']); ?>">编辑</a>
	        	<?php if($v['id'] > 1): ?><a href="/index.php/Admin/System/del/id/<?php echo ($v['id']); ?>" onclick="return confirm('确定要删除吗？')">|删除</a><?php endif; ?>
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