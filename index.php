<?php
//php版本为5.3.13、	Apache版本为2.2.22、mysql版本为5.5.24
//Thinkphp版本为3.2.3 
//程序入口位置，单一入口原则
header("Content-type: text/html; charset=utf-8");   //如果在html中输出，就不必定义编码
define('APP_DEBUG',true);         //调试模式

//前台，给资源文件路径定义成常量
define('SITE_URL','http://www.nyist.com/');//http://www.nyist.com/
define('CSS_URL',SITE_URL.'Application/Home/Public/css/');//SITE_URL.
define('IMG_URL',SITE_URL.'Application/Home/Public/img/');//
define('JS_URL',SITE_URL.'Application/Home/Public/js/');//
//后台
define('ADMIN_CSS_URL',SITE_URL.'Application/Admin/Public/css/');//
define('ADMIN_IMG_URL',SITE_URL.'Application/Admin/Public/img/');//
define('ADMIN_JS_URL',SITE_URL.'Application/Admin/Public/js/');//

//其他插件文件的路径
define('TIME_URL',SITE_URL.'Application/Public/datepicker/');//
define('EDIT_URL',SITE_URL.'Application/Public/ueditor/');//

define('APP_PATH','./Application/');  //应用程序的路径，同时自动创建路径
require './ThinkPHP/ThinkPHP.php';