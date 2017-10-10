<?php
namespace Admin\Model;
use Model;

class UserModel extends BaseModel{
	//进行搜索
	public function search($pageSize=10){
		if($user_sex = I('get.user_sex'))
			$where['user_sex'] = array('eq',$user_sex=='男'?1:0);
		if($user_age=I('get.user_age')){
			$where['user_age']=array('eq',$user_age);
		}
		$count = $this->where($where)->count();
		$page = new \Think\Page($count, $pageSize);
		// 配置翻页的样式
		$page->setConfig('prev', '上一页');
		$page->setConfig('next', '下一页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %NOW_PAGE%/%TOTAL_PAGE% %FIRST% %UP_PAGE% %DOWN_PAGE% %END%");
		$data['page'] = $page->show();
		/************************************** 取数据 ******************************************/
		$data['data'] = $this->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		return $data;
	}
}