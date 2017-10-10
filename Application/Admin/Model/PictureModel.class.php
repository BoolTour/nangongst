<?php
namespace Admin\Model;
use Model;

class PictureModel extends BaseModel{
	protected function _before_insert(&$data, $option)
	{
		if(isset($_FILES['file']) && $_FILES['file']['error'] == 0)
		{
			$ret = uploadOne('file', 'Picture', array(
				array(150, 150,2),
			));
			if($ret['ok'] == 1)
			{
				$data['file_big_pic'] = $ret['images'][0];
				$data['file_small_pic'] = $ret['images'][1];
			}
			else 
			{
				$this->error = $ret['error'];
				return FALSE;
			}
		}
	}
	//在控制器中调用delete方法之前会自动调用
	protected function _before_delete($option){
		//先根据商品的id取出这件商品的图片路径
		$pic=$this->field('file_small_pic,file_big_pic')->find($option['where']['id']);
		//从配置文件中取出商品所在的目录
		$rp=C('IMG_rootPath');
		//删除图片
		unlink($rp.$pic['file_small_pic']);
		unlink($rp.$pic['file_big_pic']);
	}

}