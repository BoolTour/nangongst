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
			<form action="/index.php/Home/User/found" method="post">
				<table id="login_table">
					<tr>
						<th width="90">用户名:</th>
						<td colspan="2">
							<span>
								<input type="text" name="username" maxlength="20" placeholder="请输入账号" class="text_Tex" >
							</span>
						</td>
					</tr>
					<tr>
						<th>邮&nbsp;&nbsp;箱:</th>
						<td colspan="2">
							<span>
								<input type="email" name="email" maxlength="20" placeholder="请输入邮箱" class="text_Pwd" >
							</span>
						</td>
					</tr>              
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="login" value="找回" class="myButton">&nbsp;&nbsp;
                            <input type="reset" name="login" value="重置" class="myButton">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>