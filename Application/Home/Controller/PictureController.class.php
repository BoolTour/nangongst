<?php
namespace Home\Controller;
use Think\Controller;

class PictureController extends BaseController {
	public function index(){
		$info=D('Picture')->select();
		
		$this->assign('info',$info);
		$this->display();
	}
}