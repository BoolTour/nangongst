<?php
namespace Admin\Model;
use Think\Model;

class BaseModel extends Model{
	function __construct(){
		parent::__construct();
		$this->pages();
	}

	//封装实现分类效果类。
	public function pages($where="",$table,$per=5){
		// 总的记录数
		$count = $this->where($where)->count();
		// 生成翻页对象
		$page = new \Think\Page($count, $per);
		$page->setConfig('next','【下一页】');
		$page->setConfig('prev','【上一页】');
		$page->setConfig('first','【首页】');
		$page->setConfig('last','【末页】');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %NOW_PAGE%/%TOTAL_PAGE% %FIRST% %UP_PAGE%  %DOWN_PAGE% %END%");
		// 获取翻页字符串
		$pageString = $page->show();
		// 取出当前页的数据
		$data = $this->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		
		return array(
			'page' => $pageString,
			'data' => $data,
		);
	}
}