<?php
namespace Home\Controller;
use Tool\Smtp;

class TokenController extends Smtp{
	//发送邮件的函数
	function sendEmail($username,$email,$token){
		$smtpserver = "smtp.163.com"; //SMTP服务器
	    $smtpserverport = 25; //SMTP服务器端口
	    $smtpusermail = "nangongst@163.com"; //SMTP服务器的用户邮箱
	    $smtpuser = "nangongst@163.com"; //SMTP服务器的用户帐号
	    $smtppass = "linux123"; //SMTP服务器的用户密码
	    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
	    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
	    $smtpemailto = $email;
	    $smtpemailfrom = $smtpusermail;
	    $emailsubject = "用户帐号激活";
	    //http://www.nyist.com/
	    $emailbody = "亲爱的".$username."：感谢您在我站注册了新帐号.请点击链接激活您的帐号。<br/><a href='http://www.nyist.com/index.php/Home/User/token/verify/".$token."' target='_blank'>http://www.nyist.com/index.php/Home/User/token/verify/".$token."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>--- ngst.com 敬上</p>";
	    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
		if($rs==1){
			$msg = '恭喜您，注册成功！请登录到您的邮箱及时激活您的帐号！';	
		}else{
			$msg = $rs;	
		}
	     $js = <<<eof
                 <script type="text/javascript">
                  alert("$msg");
                 </script>
eof;
            echo $js;
	}
	//找回密码的函数
	function sendEmail_found($time,$email,$url){
		$smtpserver = "smtp.163.com"; //SMTP服务器
	    $smtpserverport = 25; //SMTP服务器端口
	    $smtpusermail = "nangongst@163.com"; //SMTP服务器的用户邮箱
	    $smtpuser = "nangongst@163.com"; //SMTP服务器的用户帐号
	    $smtppass = "linux123"; //SMTP服务器的用户密码
	    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
	    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
	    $smtpemailto = $email;
	    $smtpemailfrom = $smtpusermail;
	    $emailsubject = "找回密码";
	    $emailbody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码（按钮24小时内有效）。<br/><a href='".$url."' target='_blank'>".$url."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问。<br/>如果您没有提交找回密码请求，请忽略此邮件。";
	    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
		if($rs==1){
			$msg = '请登录到您的邮箱及时修改密码！';	
		}else{
			$msg = $rs;	
		}
		$js = <<<eof
                 <script type="text/javascript">
                  alert("$msg");
                 </script>
eof;
            echo $js;
		return $rs;
	}
}