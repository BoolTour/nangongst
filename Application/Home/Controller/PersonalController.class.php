<?php
namespace Home\Controller;
use Think\Controller;

class PersonalController extends BaseController {
    public function index(){
    	$name=session('user_name');    //获取用户名
    	$person=D('User')->where("username='$name'")->select();
    	$this->assign("person",$person);
    	$this->display();
    }
    public function xiugai($id){
    	$user=D('User');
    	$info=$user->where("id=$id")->find();
    	if(IS_POST){ 
			$data=$user->create();
			$data['password']=md5($data['password']);
			$result=$user->save($data);
			if($result!==false){
				$this->success('信息修改成功！',U('index'),3);
			}else{
				$this->error('信息修改失败！');
			}
    	}
    	$this->assign("info",$info);
		$this->display();
	}
}