<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	/*public function checkNamePwd($nm,$pwd){
		//首先，检查数据库中是否存在用户名，其次，检查密码是否正确，状态等信息
		$info=$this->where("username='$nm' and status=1")->find();
		if($info!=null){
			if($info['password']==$pwd){
				return $info;
			}else{
				echo "密码错误！";
			}
		}else{
			return false;
		}
	}*/
	public $_login_validate = array(
		array('username', 'require', '用户名不能为空！', 1),
		array('password', 'require', '密码不能为空！', 1),
		array('captcha', 'require', '验证码不能为空！', 1),
		array('captcha', 'chk_captcha', '验证码不正确！', 1, 'callback'),
	);
	public function chk_captcha($code)
	{
		 $verify = new \Think\Verify();
		 return $verify->check($code);
	}
	public function checkUser($username,$password){ //用户注册过，并且是成员，才可以登录
		$sql="select * from ngst_user as a inner join ngst_member as b on a.sno=b.sno where a.username='$username' and a.password='$password' and status=1 limit 1";                 
		return $this->execute($sql);
	}
	public function checkSno($username){        //检测是否为内部成员
		$sql="select * from ngst_user as a inner join ngst_member as b on a.sno=b.sno where a.username='$username' and status=1 limit 1";
		return $this->execute($sql);
	}
	public function checkExist($verify){
		$info=$this->where("status=0 and token='$verify'")->find();
		return $info;
	}
	public function getUser($username,$email){
		$info=$this->where("username='$username' and email='$email'")->find();
		return $info;
	}
}