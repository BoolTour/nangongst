<?php
namespace Admin\Controller;
use Tool\AdminController;

class PictureController extends AdminController{
	public function lst(){
		$model = D('Picture');
		$data=$model->pages('',$model,2);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function add(){
		if(IS_POST){
			$model=D('Picture');
			if($model->create(I('post.'), 1))
    		{
    			if($id = $model->add())
    			{
    				$this->success('添加成功！', U('lst'),3);
    				exit;
    			}
    		}
    		$this->error($model->getError());
		}
		$this->display();
	}
	public function del($id){
		$del=D('Picture')->delete($id);
		if($del){
			$this->success('删除成功',U('lst'),3);
		}else{
			$this->error('删除失败');
		}
	}
}