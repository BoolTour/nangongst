<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>log.css" />
    <link href="<?php echo (CSS_URL); ?>User_Login.css" type="text/css" rel="stylesheet" />
	<title>登录界面</title>
</head>
<body>
	<div id="main" >
		<span id="login_title">南工电脑网</span>
		<div id="user_login"><br><br>
			<form action="/index.php/Home/User/resetpasswd2/user/<?php echo $_GET['user']?>" method="post">
				<table id="login_table">
					<tr>
						<th width="90" align="right">新密码:</th>
						<td colspan="2">
							<span>
								<input type="password" name="password" maxlength="20" placeholder="请输入密码" class="text_Pwd" >
							</span>
						</td>
					</tr>
					<tr>
						<th align="right">确认密码:</th>
						<td colspan="2">
							<span>
								<input type="password" name="repassword" maxlength="20" placeholder="请再次输入密码" class="text_Pwd" >
							</span>
						</td>
					</tr>              
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="login" value="提交" class="myButton">&nbsp;&nbsp;
                            <input type="reset" name="login" value="重置" class="myButton">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>