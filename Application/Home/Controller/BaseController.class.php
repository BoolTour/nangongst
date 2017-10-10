<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {
    //构造方法
	function __construct() {
		parent::__construct();
		if(session('user_id')){
			echo "";
		}elseif($_GET['id']==5){
			echo "";
		}elseif($_GET['id']==6){
			echo "";
		}
		else{
			$url = U('Home/User/login');
            $js = <<<eof
                 <script type="text/javascript">
                 	alert("请您登录之后再访问！");
                    window.top.location.href="$url";
                 </script>
eof;
            echo $js;
		}
	}
}