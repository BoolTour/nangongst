<?php
namespace Home\Controller;
use Think\Controller;

class ResoultController extends BaseController {
	public function index(){
		$model = D('Resoult');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info'=>$data['data'],
			'page'=>$data['page'],
		));

		$link=D('Link')->select();
		$this->assign("link",$link);
		$this->display();
	}
	public function download($id){
		$model=D('Resoult');
		$model->down($id);
	}
}