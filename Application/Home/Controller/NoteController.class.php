<?php
namespace Home\Controller;
use Think\Controller;

class NoteController extends BaseController {
	public function index(){
		$model=D('Note');
		$count=$model->count("id");    //统计数据库中的留言数量
		$data=$model->pages('',$model,6);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->assign("count",$count);
		$this->display();
	}
	public function tianjia(){
		$note=D('Note');
		if(!empty($_POST)){
			$data=$note->create();
			$data['date']=date('Y-m-d H:i:s',time());
			$data['user']=session('user_name');
			if($note->add($data)){
				$this->redirect('Note/index');
			}else{
				$this->error("没有留言成功！");
			}
		}
	}
}