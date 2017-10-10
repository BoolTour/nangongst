<?php
namespace Admin\Controller;
use Tool\AdminController;

class RoleController extends AdminController{
	public function lst(){
		$model = D('Role');
		$data = $model->pages('',$model,10);  //分页类，第一个参数传递条件，第二个参数传递表，第三个参数传递每条显示的记录数
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
        //$this -> assign('info',$info);
		$this->display();
	}
	public function add(){
		$role=D('Role');
		if(!empty($_POST)){
			$data=$role->create();
			if($role->add($data)){
				$this->success("添加成功！",U('lst'),3);
			}else{
				$this->error("添加失败！");
			}
		}

		$this->display();
	}
	//给角色分配权限，形参也就是传递的是get请求。
	public function distribute($role_id){
		//echo $role_id;
		$role=D('Role');
		if(!empty($_POST)){
			//authid为表单提交的数据，二维数组值为对应权限的id
			if($role->saveAuth($_POST['auth_id'],$role_id)){
				$this->success("分配成功！",U('lst'),3);
			}
		}
		//获得展示信息
		$auth_infoA=D('Auth')->where('auth_level=0')->select();
		$auth_infoB=D('Auth')->where('auth_level=1')->select();
		//获得当前的角色的信息
        $role_info = $role->find($role_id);
        //获得当前角色的ids，存储为数组。
        $authidsarr=explode(',', $role_info['role_auth_ids']);

        $this->assign('authidsarr',$authidsarr);
        $this->assign('role_info',$role_info);
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);
		$this->display();
	}
	//修改角色名称
	/*public function edit($role_id){
		$model=D('Role');
		$role=$model->select();
		$info=$model->find($role_id);
		if(!empty($_POST)){
			$data=$model->create(I('post.'), 2);
			if($model->save($data)){
				$this->success("修改成功！",U('lst'),3);
			}else{
				$this->error("修改失败！");
			}
		}

		$this->assign('role',$role);
		$this->assign("info",$info);
		$this->display();
	}*/
	public function del($role_id){
		$del=D('Role')->delete($role_id);
		if($del){
			$this->success("删除成功！",U('lst'),3);
		}else{
			$this->error("删除失败！");
		}
	}
}