<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	$info=D('News')->select();     //社团最新的公告

    	$this->assign('info',$info);
    	$this->display();
    }
    public function news($id){
    	$info=D('News')->find($id);
    	$this->assign('info',$info);
    	$this->display();
    }
}