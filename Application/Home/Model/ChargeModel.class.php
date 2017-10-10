<?php
namespace Home\Model;
use Model;

class ChargeModel extends BaseModel{
	public function search($pageSize=10){
		if($pro_id=I('get.pro_id')){
			$where['pro_id']=array('eq',$pro_id);
		}
		$count = $this->where($where)->count();
		$page = new \Think\Page($count, $pageSize);
		// 配置翻页的样式
		$page->setConfig('next','【下一页】');
		$page->setConfig('prev','【上一页】');
		$page->setConfig('prev', '上一页');
		$page->setConfig('next', '下一页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %NOW_PAGE%/%TOTAL_PAGE% %FIRST% %UP_PAGE%  %DOWN_PAGE% %END%");
		$data['page'] = $page->show();
		/************************************** 取数据 ******************************************/
		$data['data'] = $this->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		return $data;
	}
}