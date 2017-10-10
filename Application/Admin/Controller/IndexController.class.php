<?php
namespace Admin\Controller;
use Tool\AdminController;

class IndexController extends AdminController{
	public function index(){
		$this->display();
	}
	public function left(){
		//根据用户的角色显示对应的权限
        //1.根据用户的session信息获得对应的角色
        $manager_info=D('Manager')->find(session('admin_id'));
        $role_id=$manager_info['role_id'];
        //var_dump($manager_info);
        //2.根据$role_id获得对应的ids
        $role_info=D('Role')->find($role_id);
        $auth_ids=$role_info['role_auth_ids'];
        //var_dump($auth_ids); 
        //3.根据$auth_ids获得权限详情
        //给管理员开放绝对权限
        if(session('admin_user')==='root'){
            $auth_infoA=D('Auth')->where("auth_level=0")->select();
            $auth_infoB=D('Auth')->where("auth_level=1")->select();
        }else{
            $auth_infoA=D('Auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select(); 
            $auth_infoB=D('Auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();
        }
        //1代表2级权限
        //var_dump($auth_info);
        //4.将数据添加到模板里面
        $this->assign('auth_infoA',$auth_infoA);
        $this->assign('auth_infoB',$auth_infoB);
		$this->display();
	}
	public function right(){
        $date=date('Y-m-d H:i:s',time());
        $this->assign('date',$date);
		$this->display();
	}
	public function head(){
		$this->display();
	}
}