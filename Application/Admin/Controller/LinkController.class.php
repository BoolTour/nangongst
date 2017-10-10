<?php
namespace Admin\Controller;
use Tool\AdminController;

class LinkController extends AdminController{
	public function lst(){
		$model = D('Link');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function add(){
		$Link=D('Link');
		if(IS_POST){
			$data=$Link->create();
			if($Link->add($data)){
				$this->success('添加成功',U('lst'),3);
			}else{
				$this->error('添加失败');
			}
		}
		$this->display();
	}
	public function del($id){
		$del=D('Link')->delete($id);
		if($del){
			$this->success('删除成功',U('lst'),3);
		}else{
			$this->error('删除失败');
		}
	}
}