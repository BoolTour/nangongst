<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>权限列表</title>
        <link href="<?php echo (ADMIN_CSS_URL); ?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/index.php/Admin/Auth/add">【添加权限】</a>
                </span>
            </span>
        </div>
        <div></div>
        
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td><td>权限名称</td><td>父id</td><td>控制器</td>
                        <td>操作方法</td><td>全路径</td><td>等级</td>
                        <td align="center" colspan='100'>操作</td>
                    </tr>
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($v['auth_id']); ?></td>
                        <td><?php echo (str_repeat($ge,$v['auth_level'])); echo ($v['auth_name']); ?></td>
                        <td><?php echo ($v['auth_pid']); ?></td>
                        <td><?php echo ($v['auth_c']); ?></td>
                        <td><?php echo ($v['auth_a']); ?></td>
                        <td><?php echo ($v['auth_path']); ?></td>
                        <td><?php echo ($v['auth_level']); ?></td>
                        <td><a href="/index.php/Admin/Auth/edit/auth_id/<?php echo ($v['auth_id']); ?>">修改</a></td>
                        <td><a href="/index.php/Admin/Auth/del/auth_id/<?php echo ($v['auth_id']); ?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                        <td colspan="20" style="text-align:right;">
                            <?php echo ($page); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>