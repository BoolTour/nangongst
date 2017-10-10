<?php
namespace Admin\Controller;
use Tool\AdminController;

class NoteController extends AdminController{
	public function lst(){
		$model = D('Note');
		$data=$model->pages('',$model,5);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function del($id){
		$del=D('Note')->delete($id);
		if($del){
			$this->success('删除成功',U('lst'),3);
		}else{
			$this->error('删除失败');
		}
	}
}