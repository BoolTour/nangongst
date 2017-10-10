<?php
namespace Home\Model;
use Model;

class ResoultModel extends BaseModel{
	public function down($id){
		$data=$this->find($id);
		//调用实现下载的函数。
		download($data['filetrace'],$data['filename']);
	}
}