<?php
namespace Admin\Controller;
use Tool\AdminController;

class UserController extends AdminController{
	public function lst(){
		$model=D('User');

		$data=$model->search();
		$this->assign(array(
			'info'=>$data['data'],
			'page'=>$data['page'],
		));
		$this->display();
	}
	public function edit($id){
		$user=D('User');
		$info=$user->where("id=$id")->find();
		if(IS_POST){
			$model = D('User');
			if($model->create(I('post.'), 2))
			{
				//save方法返回的记录影响条数，没有修改返回0，失败返回FALSE。
				if(FALSE!==$model->save())
				{
					$this->success('操作成功！', U('lst'),3);
					exit;
				}
			}
			$this->error($model->getError());
		}
		$this->assign('info',$info);
		$this->display();
	}
	public function del($id){
		$del = D('User')->where("id=$id")->delete();
		if($del){
			$this->success('删除成功！',U('lst'),3);
		}else{
			$this->error("删除失败！");
		}
	}
}