<?php
namespace Admin\Controller;
use  Think\Controller;

class ManagerController extends Controller{
	public function login(){
		if(IS_POST)
		{
			$model = D('Manager');
			// 使用validate方法来指定使用模型中的哪个数组做为验证规则，默认是使用$_validate
			// 这里把登录的规则和添加修改管理员的规则分成了两个，所以这里要指定使用哪个
			// 7我们自己规定，代表登录说明这个表单是登录的表单
			if($model->validate($model->_login_validate)->create('',  7))
			{
				if(TRUE === $model->login())
					redirect(U('Admin/Index/index')); // 直接跳转可以不提示信息
			}
			$this->error($model->getError());
		}
		$this->display();
	}
	//退出系統
	public function logout(){
	    session(null);  //清空所有session
	    $this->redirect('login');
	}
	 //验证码的生成
  	public function verifyImg(){
      $cfg=array(
        'imageH'=>22,         //高度
        'imageW'=>70,         //宽度
        'fontSize'=>10,       //字体大小
        'length'=>3,           //长度
        'fontttf'=>'4.ttf',       //字体
        'useNoise'=>false,    // 关闭验证码杂点
      );
      $very=new \Think\Verify($cfg);
      $very->entry();
    }
}