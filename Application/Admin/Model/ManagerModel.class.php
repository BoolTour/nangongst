<?php
namespace Admin\Model;
use Model;

class ManagerModel extends BaseModel{
	//允许添加或者修改的字段
	protected $insertFields = array('username','password','cpassword','role_id');
	protected $updateFields = array('id','username','cpassword','password','role_id');
	// 登录时表单验证的规则 array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间])
	public $_login_validate = array(
		array('username', 'require', '用户名不能为空！', 1),
		array('password', 'require', '密码不能为空！', 1),
		array('captcha', 'require', '验证码不能为空！', 1),
		array('captcha', 'chk_captcha', '验证码不正确！', 1, 'callback'),
	);
	// 添加或修改管理员时用
	protected $_validate = array(
		array('username', 'require', '账号不能为空！', 1, 'regex', 3),
		array('username', '1,30', '账号的值最长不能超过 30 个字符！', 1, 'length', 3),
		// 下面的规则只有添加时生效，修改时不生效，第六个参数代表什么时候验证：1：添加时验证 2：修改时 3：所有情况都验证
		array('password', 'require', '密码不能为空！', 1, 'regex', 1),
		array('cpassword', 'password', '两次密码输入不一致！', 1, 'confirm', 3),
		array('username', '', '账号已经存在！', 1, 'unique', 3),
	);
	public function chk_captcha($code)
	{
		 $verify = new \Think\Verify();
		 return $verify->check($code);
	}
	public function login(){
		// 获取表单中的用户名密码
		$username = $this->username;
		$password = $this->password;
		// 先查询数据库有没有这个账号
		$user = $this->where(array('username' => array('eq', $username)))->find();
		// 判断有没有账号
		if($user)
		{
			//判断是否为超级管理员
			/*if($user['id'] == 1)
			{
			*/	// 判断密码
				if($user['password'] == md5($password.C('MD5_KEY')))
				{
					// 把ID和用户名存到session中
					session('admin_id', $user['id']);
					session('admin_user', $user['username']);
					return TRUE;
				}
				else 
				{
					$this->error = '密码不正确！';
					return FALSE;
				}
			//}
		}
		else 
		{
			$this->error = '用户名不存在！';
			return FALSE;
		}
	}
	//钩子函数，修改
	protected function _before_update(&$data,$option){
		/*var_dump($data);    //可以使用$data['username']获得用户名，密码等
		echo "<br>";              
		var_dump($option);die;        //$option['table'],$option['model'],$option['where']['id']等数据*/
		//$passwd = I('post.password');   //获得表单提交的数据
		$data['password'] = md5($data['password'].C('MD5_KEY')); // 如果密码不是空的，就加密
	}
	// 添加前
	protected function _before_insert(&$data, $option)
	{
		$data['password'] = md5($data['password'].C('MD5_KEY'));
	}
}