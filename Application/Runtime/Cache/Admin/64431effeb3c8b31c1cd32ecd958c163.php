<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>角色列表</title>
        <link href="<?php echo (ADMIN_CSS_URL); ?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/index.php/Admin/Role/add">【添加角色】</a>
                </span>
            </span>
        </div>
        <div></div>
        
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>记录id</td><td>角色名称</td><td>权限ids</td><td>权限ac</td>
                        <td align="center" colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr id="product1">
                        <td><?php echo ($v['role_id']); ?></td>
                        <td><?php echo ($v['role_name']); ?></td>
                        <td><?php echo ($v['role_auth_ids']); ?></td>
                        <td><?php echo ($v['role_auth_ac']); ?></td>
                        <td><a href="/index.php/Admin/Role/distribute/role_id/<?php echo ($v['role_id']); ?>">分配权限</a></td>
                        <td><a href="/index.php/Admin/Role/del/role_id/<?php echo ($v['role_id']); ?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                        <td colspan="6" style="text-align:right;">
                            <?php echo ($page); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>