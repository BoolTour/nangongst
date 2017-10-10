<?php
namespace Admin\Model;
use Model;

class RoleModel extends BaseModel{
	//分页效果的使用
	/*public function search($where="",$per){
		// 总的记录数
		$count = $this->where($where)->count();
		// 生成翻页对象
		$page = new \Think\Page($count, $per);
		$page->setConfig('next','【下一页】');
		$page->setConfig('prev','【上一页】');
		$page->setConfig('first','【首页】');
		$page->setConfig('last','【末页】');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %NOW_PAGE%/%TOTAL_PAGE% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
		// 获取翻页字符串
		$pageString = $page->show();
		// 取出当前页的数据
		$data = $this->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		
		return array(
			'page' => $pageString,
			'data' => $data,
		);
	}*/
	//给角色分配权限，数据的制作和存储
	public function saveAuth($authid,$roleid){
		//1.根据authid一维数组制作ids字符串
		$auth_ids=implode(',',$authid);
		//2.根据auth_ids获得对应的控制器和方法。
		//field获得列,select复杂的条件查询。
		$auth_info=D('Auth')->field('auth_c,auth_a')->select("$auth_ids");
		//3.根据查询出来的信息，拼装控制器和方法。
		$s="";
		foreach($auth_info as $v){
			if(!empty($v['auth_a']))  //父级的控制器和方法为空
				$s.=$v['auth_c']."-".$v['auth_a'].",";
		}
		$s=rtrim($s,',');      //去掉末尾的逗号。

		//4.根据以上信息，更新role表
		$sql="update ngst_role set role_auth_ids='$auth_ids',role_auth_ac='$s' where role_id='$roleid'";
		return $this->execute($sql);
	}
}