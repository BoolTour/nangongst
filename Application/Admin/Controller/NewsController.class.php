<?php
namespace Admin\Controller;
use Tool\AdminController;

class NewsController extends AdminController{
	public function lst(){
		$model = D('News');
		$data=$model->pages('',$model,10);
		$this->assign(array(
			'info' => $data['data'],
			'page' => $data['page'],
		));
		$this->display();
	}
	public function add(){
		$news=D('News');
		if(IS_POST){
			$data=$news->create();
			$data['date']=date('Y-m-d H:i:s',time());
			if($news->add($data)){
				$this->success('添加成功',U('lst'),3);
			}else{
				$this->error('添加失败');
			}
		}
		$this->display();
	}
	public function more($id){
		$info=D('News')->find($id);

		$this->assign('info',$info);
		$this->display();
	}
	public function edit($id){
		$news=D('News');
		$info=$news->find($id);
		if(IS_POST){
			$data=$news->create();
			$result=$news->save($data);
			if($result!==false){
				$this->success('修改成功',U('lst'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$this->assign('info',$info);
		$this->display();
	}
	public function del($id){
		$del=D('News')->delete($id);
		if($del){
			$this->success('删除成功',U('lst'),3);
		}else{
			$this->error('删除失败');
		}
	}
}