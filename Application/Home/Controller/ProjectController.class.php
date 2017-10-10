<?php
namespace Home\Controller;
use Think\Controller;

class ProjectController extends BaseController {
	public function index(){
		$model = D('Project');
		$where="pro_admit=1";
		$data=$model->pages($where,$model,10);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	//查看项目的详情
	public function more($id){
		$info=D('Project')->where("pro_id=$id")->find();

		$this->assign("info",$info);
		$this->display();
	}
	//申报项目
	public function add(){
		if(IS_POST){
			$model=D('Project');
			$data=$model->create();
			$data['pro_user']=session('user_name');
			if($model->add($data))
    		{
    			$this->success('添加成功！', U('index'),3);
    		}
    		$this->error($model->getError());
		}
		$this->display();
	}
	public function lst(){
		$user=session('user_name');
		$where="pro_user='$user'";
		$model=D('Project');
		$data=$model->pages($where,$model,2);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}

	//我的项目里的三个（修改项目、添加组成员、删除项目）
	public function xiugai($id){
		$model=D('Project');
		$info=$model->where("pro_id=$id")->find();
		if(IS_POST){
			$data=$model->create();
			$data['pro_user']=session('user_name');
			$data['pro_remark']=$info['pro_remark'];
			$data['pro_admit']=$info['pro_admit'];
			$result=$model->where("pro_id=$id")->save($data);
			if($result!==false){
				$this->success('修改成功',U('lst'),3);
			}else{
				$this->error('修改失败');
			}
		}      
		$this->assign("info",$info);
		$this->display();
	}
	public function shanchu($id){
		$del=D('Project')->delete($id);
		if($del){
			 $this->redirect('Project/index');
		}else{
			$this->error(删除失败！);
		}
	}
	public function tianjia(){
		$model=D('Charge');
		if(IS_POST){
			$data=$model->create();
			if($model->add($data)){
				$this->success("添加成功",U('index'),3);
			}else{
				$rthis->error("添加失败");
			}
		}
		$this->display();
	}
	public function member(){
		$model = D('Charge');
		$data=$model->search();
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
}