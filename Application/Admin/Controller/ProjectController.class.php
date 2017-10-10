<?php
namespace Admin\Controller;
use Tool\AdminController;

class ProjectController extends AdminController{
	public function lst(){
		$model = D('Project');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function check($id){
		$pro=D('Project');
		$info=$pro->find($id);
		$remark=$_POST['pro_remark'];
		$admit=$_POST['pro_admit'];
		if(IS_POST){
			$data = array('pro_remark'=>"$remark",'pro_admit'=>"$admit");
			$result=$pro->where("pro_id=$id")->setField($data); 
			if($result!==false){
				$this->redirect('Project/lst');
			}
		}
		$this->assign("info",$info);
		$this->display();
	}
	public function del($id){
		$del=D('Project')->delete($id);
		if($del){
			$this->success("删除成功",U('lst'),3);
		}else{
			$this->error("删除失败");
		}
	}
}