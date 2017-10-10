<?php
namespace Admin\Controller;
use Tool\AdminController;

class SystemController extends AdminController{
	public function lst(){
		$model=D('Manager');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info'=>$data['data'],
			'page'=>$data['page'],
		));
		
		$this->display();
	}
	public function add(){
		$role=D('Role')->select();
		$model = D('Manager');
		if(IS_POST)
    	{	
    		$data=$model->create();
    		$result=$model->add($data);
			if($result!==false)
			{
				$this->success('添加成功！', U('lst'),3);
				exit;
			}
    		$this->error($model->getError());
    	}
		
		$this->assign('role',$role);
		$this->display();
	}
	public function edit($id){
		//获取$id=I('get.id'); 没有使用钩子函数
		$manager = D('Manager');
		$info=$manager->find($id);      
		$role=D('Role')->select();
		if(IS_POST)
    	{
    		$manager->create(I('post.'), 2);
    		if($manager->save())
			{
				$this->success('修改成功！', U('lst'),3);
			}else{
				$this->error($manager->getError());
			}	
    	}

		$this->assign("role",$role);
		$this->assign('info',$info);
		$this->display();
	}
	public function del($id){
		$del=D('Manager')->delete($id);
		if($del){
			$this->success('删除成功！',U('lst'),3);
		}else{
			$this->error('删除失败！');
		}
	}
}
