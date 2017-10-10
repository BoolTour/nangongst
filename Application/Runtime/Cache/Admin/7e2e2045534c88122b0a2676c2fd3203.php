<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo (ADMIN_CSS_URL); ?>admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=<?php echo (ADMIN_IMG_URL); ?>title_bg1.jpg>当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=<?php echo (ADMIN_IMG_URL); ?>shadow_bg.jpg></td></tr>
        </table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="<?php echo (ADMIN_IMG_URL); ?>admin_p.gif" width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>
                        <tr>
                            <td>当前时间：<?php echo ($date); ?></td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px"><?php echo (session('admin_user')); ?> </td></tr>
                        <tr>
                            <td>欢迎进入网站管理中心！</td></tr>
                    </table>
                </td>
            </tr>
            <tr><td colspan=3 height=10></td></tr>
        </table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=<?php echo (ADMIN_IMG_URL); ?>title_bg2.jpg></td></tr>
        </table>
    </body>
</html>