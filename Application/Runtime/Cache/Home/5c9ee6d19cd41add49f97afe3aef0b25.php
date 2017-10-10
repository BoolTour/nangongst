<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>log.css" />
    
	<title>登录界面</title>
</head>
<body>
	<div id="main" >
		<span id="login_title">南工电脑网</span>
		<div id="user_login">
			<form action="/index.php/Home/User/login" method="post">
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
						<th>密&nbsp;&nbsp;码:</th>
						<td colspan="2">
							<span>
								<input type="password" name="password" maxlength="20" placeholder="请输入密码" class="text_Pwd" >
							</span>
						</td>
					</tr>
                    <tr>
						<th>验证码:</th>
						<td colspan="2">
							<span>
								<input type="text" name="captcha" placeholder="请输入验证码" size="10" class="text_Cap"/>
                                            <img src="/index.php/Home/User/verifyImg" width="80" height="25" alt="CAPTCHA" border="1" onclick="this.src='/index.php/Home/User/verifyImg/'+Math.random()" style="cursor: pointer; vertical-align:bottom;" alt="" />
							</span>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="login" value="登录" class="myButton">&nbsp;&nbsp;
                            <input type="reset" name="login" value="重置" class="myButton">
						</td>
					</tr>
				</table>
			</form>
			<hr>
			<!--<p align="center">忘记密码  
				<a href="/index.php/Home/User/found">立即找回 </a>
			</p>-->
		</div>
	</div>
</body>
</html>