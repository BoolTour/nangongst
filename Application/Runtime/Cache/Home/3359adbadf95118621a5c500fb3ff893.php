<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册页面</title>
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>log.css" />
    <script type="text/javascript">
        function checknm(){
            //ajax实现对用户名的验证
            var nm=document.getElementById('username').value;
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange=function(){
                if(xhr.readyState==4){
                    document.getElementById('result').innerHTML=xhr.responseText;
                }
            }
            if(nm){
               xhr.open('get','<?php echo U('Home/User/check');?>?name='+nm);
           }else{
                return false;
           }
            xhr.send(null);
        }
    </script>
</head>
<body>
	<div id="main" >
		<span id="login_title">南工电脑网</span>
		<div id="user_login">
		<form action="/index.php/Home/User/register" method="post">
			<table id="login_table">
                <tr>
                    <td align="right">用户名：</td>
                    <td align="left"><input type="text" name="username" id="username" maxlength="16" size="20" class="myInput" onblur="checknm()" />
                    <span id="result"></span>
                    </td>
                </tr>
                <tr>
                    <td align="right">密码：</td>
                    <td align="left"><input type="password" name="password" id="password" maxlength="16" size="20" class="myInput" /></td>
                </tr>
                <tr>
                    <td align="right">学号：</td>
                    <td align="left"><input type="text" name="sno" id="sno" maxlength="16" size="20" class="myInput" /></td>
                </tr>
                <tr>
                    <td align="right">电子邮件：</td>
                    <td align="left"><input type="email" name="email" id="email" maxlength="20" size="20" class="myInput" /></td>
                </tr>
                 <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="注册用户" name="button" class="myButton"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="重新填写" class="myButton"/>
                    </td>
                </tr>
            </table>
        </form>		
		</div>
	</div>
</body>
</html>