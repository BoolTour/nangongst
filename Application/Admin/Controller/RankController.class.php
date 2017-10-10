<?php
namespace Admin\Controller;
use Tool\AdminController;

class RankController extends AdminController{
	public function lst(){
		$model = D('Rank');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function add(){
		$Rank=D('Rank');
		if(IS_POST){
			$data=$Rank->create();
			if($Rank->add($data)){
				$this->success('添加成功',U('lst'),3);
			}else{
				$this->error('添加失败');
			}
		}
		$this->display();
	}
	public function del($id){
		$del=D('Rank')->delete($id);
		if($del){
			$this->success('删除成功',U('lst'),3);
		}else{
			$this->error('删除失败');
		}
	}
}