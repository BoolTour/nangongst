<?php
namespace Admin\Controller;
use Tool\AdminController;

class MemberController extends AdminController{
	public function lst(){
		$model = D('Member');
		$data=$model->search();
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function add(){
		if(IS_POST){
			$model=D('Member');
			if($model->create(I('post.'), 1))
    		{
    			if($id = $model->add())
    			{
    				$this->success('添加成功！', U('lst'),3);
    				exit();
    			}
    		}
    		$this->error($model->getError());
		}
		$this->display();
	}
	public function edit($id){
		$men=D('Member');
		$info=$men->find($id);
		if(!empty($_POST)){
			$data=$men->create();
			if($men->save($data)){
				$this->success("修改成功！",U('lst'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$this->assign("info",$info);
		$this->display();
	}
	public function del($id){
		$del=D('Member')->delete($id);
		if($del){
			$this->success('删除成功！',U('lst'),3);
		}else{
			$this->error("删除失败！");
		}
	}
}