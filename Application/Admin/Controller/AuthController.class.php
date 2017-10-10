<?php
namespace Admin\Controller;
use Tool\AdminController;

class AuthController extends AdminController{
	public function lst(){
		$model=D('Auth');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info'=>$data['data'],
			'page'=>$data['page'],
		));
		$this->display();
	}
	public function add(){
		$auth=D('Auth');
		if(!empty($_POST)){
			//通过saveData方法制作权限的"auth_path"和"auth_level"进而实现整条记录的存储
			$data=$auth->create();
			if($auth->saveData($data)){
				$this->success("添加成功！",U('lst'),3);
            }else{
            	$this->error($auth->getError());
            }  
		}
		//获得父级权限
		$info=D('Auth')->where('auth_level=0')->select();
		$this->assign('info',$info);
		$this->display();
	}
	public function edit($auth_id){
		$auth=D('Auth');
		$info=$auth->find($auth_id);
		if(!empty($_POST)){
			$data=$auth->create();
			if($auth->save($data)){
				$this->success("修改成功！",U('lst'),3);
			}else{
				$this->error($auth->getError());
			}
		}

		$this->assign("info",$info);
		$this->display();
	}
	public function del($auth_id){
		$del=D('Auth')->delete($auth_id);
		if($del){
			$this->success('删除成功！',U('lst'),3);
		}else{
			$this->error('删除失败！');
		}
	}
}