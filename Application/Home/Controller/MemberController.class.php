<?php
namespace Home\Controller;
use Think\Controller;

class MemberController extends BaseController {
	public function index(){
		$model = D('Member');
		$rank=D('Rank')->select();
		if($_GET['id']){
			$id=$_GET['id'];
			$a=D('Rank')->find($id);
			$class=$a['class'];
			$where="class='$class'";
			$data=$model->pages($where,$model,6);
			$this->assign(array(
				'info' => $data['data'],
				'page' => $data['page'],
			));
		}else{
			$data=$model->pages('',$model,6);
			$this->assign(array(
				'info' => $data['data'],
				'page' => $data['page'],
			));
		}
		
		$this->assign("rank",$rank);
		$this->display();
	}
	public function more($id){
		layout(false);
		$info=D('Member')->find($id);

		$this->assign("info",$info);
		$this->display();
	}
}