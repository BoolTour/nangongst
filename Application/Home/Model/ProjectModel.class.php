<?php
namespace Home\Model;
use Model;

class ProjectModel extends BaseModel{
	protected $_validate=array(
        array('pro_email','email','邮箱格式不正确'),
	);
}