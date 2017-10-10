<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title>修改病房</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo (ADMIN_CSS_URL); ?>mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：病房管理->修改病房信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/index.php/Admin/Auth/lst">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="/index.php/Admin/Auth/edit/auth_id/56" method="post">
            <input type="hidden" name="auth_id" value="<?php echo ($info['auth_id']); ?>" />
            <table border="0" cellpadding="2" cellspacing="4" align="center">
                <tr>
                    <td align="right">权限名称：</td>
                    <td align="left"><input type="text" name="auth_name" value="<?php echo ($info['auth_name']); ?>"/></td>
                </tr>
                <tr>
                    <td align="right">控制器：</td>
                    <td><input type="text" name="auth_c" value="<?php echo ($info['auth_c']); ?>"/></td>
                </tr>
                <tr>
                    <td align="right">操作方法：</td>
                    <td><input type="text" name="auth_a" value="<?php echo ($info['auth_a']); ?>"/></td>
                </tr> 
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                        <input type="reset" value="重置">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>