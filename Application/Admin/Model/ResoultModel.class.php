<?php
namespace Admin\Model;
use Model;

class ResoultModel extends BaseModel{
	//进行搜索
	public function search($pageSize=10){
		if($filename=I('get.filename')){
			$where['filename']=array('eq',$filename);
		}
		$count = $this->where($where)->count();
		$page = new \Think\Page($count, $pageSize);
		// 配置翻页的样式
		$page->setConfig('prev', '上一页');
		$page->setConfig('next', '下一页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %NOW_PAGE%/%TOTAL_PAGE% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
		$data['page'] = $page->show();
		/************************************** 取数据 ******************************************/
		$data['data'] = $this->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		return $data;
	}
	protected function _before_insert(&$data, $option)
	{
		if(isset($_FILES['file']) && $_FILES['file']['error'] == 0)
		{
			$ret = uploadOne('file', 'Resoult', array(
				
			));
			if($ret['ok'] == 1)
			{
				$data['filetrace'] = $ret['images'][0];
				$data['filedate']=date('Y-m-d',time());
			}
			else 
			{
				$this->error = $ret['error'];
				return FALSE;
			}
		}
	}
	public function down($id){
		$data=$this->find($id);
		//调用实现下载的函数。
		download($data['filetrace'],$data['filename']);
	}
	//在控制器中调用delete方法之前会自动调用
	protected function _before_delete($option){ 
		//先根据商品的id取出这件商品的图片路径
		$pic=$this->field('filetrace')->find($option['where']['id']);
		//从配置文件中取出商品所在的目录
		$rp=C('IMG_rootPath');
		//删除图片
		unlink($rp.$pic['filetrace']);
	}

}