<?php
namespace Admin\Controller;
use Tool\AdminController;

class ChargeController extends AdminController{
	public function lst(){
		$model = D('Charge');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function edit($id){
		$charge=D('Charge');
		$info=$charge->find($id);
		if(!empty($_POST)){
			$data=$charge->create();
			$result=$charge->save($data);
			if($result!==false){
				$this->success("修改成功",U('lst'),3);
			}else{
				$this->error("修改失败");
			}
		}
		$this->assign("info",$info);
		$this->display();
	}
	public function del($id){
		$del=D('Charge')->delete($id);
		if($del){
			$this->success('删除成功',U('lst'),3);
		}else{
			$this->error('删除失败');
		}
	}
}