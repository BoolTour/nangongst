<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
	public function login(){
		layout(false); 
		if(!empty($_POST)){
        //校驗用戶名和密碼
        $nm=$_POST['username'];
        $pw=md5($_POST['password']);
        //利用model模型的'自定義'方法校驗用戶民和密碼
        $user=D('User');
        $info=$user->where("username='$nm' and status=1")->find();
        $info_user=$user->checkUser($nm,$pw);
        $info_sno=$user->checkSno($nm);
        if($info_sno!=1){
          $js = <<<eof
                 <script type="text/javascript">
                  alert("您不是社团成员，没有权限！");
                 </script>
eof;
            echo $js;
        }else if($info_user){  
            if($user->validate($user->_login_validate)->create('',  7)){
              session('user_name',$info['username']); //設置session信息
              session('user_id',$info['id']);
              $this->redirect('Index/index');
            }else{
              $js = <<<eof
                 <script type="text/javascript">
                  alert("验证码不正确！");
                 </script>
eof;
            echo $js;
            }
        }else{
            $js = <<<eof
                 <script type="text/javascript">
                  alert("没有通过验证或者密码不正确！");
                 </script>
eof;
            echo $js;
        }
      }
		$this->display();
	}
  public function logout(){
    session(null);  //清空所有session
    $this->redirect('Index/index');
  }
  /*
  注册时的bug,当刷新页面的时候，系统会提交多次！！！！！！！
  */
  public function register(){
      layout(false);
      $user=D('User');
      if(!empty($_POST)){         
          $data=$user->create();//收集表单信息、进行表单验证、
          $data['regtime']=time();
          $data['password']=md5($_POST['password']);
          $data['token']=md5($data['username'].$data['password'].$data['regtime']); //创建用于激活识别码
          $data['token_exptime']=time()+60*60*24;//过期时间为24小时后
          if($data['username']==NULL||$data['password']==NULL||$data['email']==NULL||$data['email']==NULL){
            $this->error('请将信息填写完整');
          }
          $email = $data[''];
          $sno = $data['sno'];
          $rst=D('Member')->where("sno=$sno")->find();
          if(!$rst){
            $this->error('您不是社团成员，不能注册！');
          }
          if($data){
            if($user->add($data)){
               $send=A('Token');
               $send->sendEmail($data['username'],$data['email'],$data['token']);
            }         
          }else{
              $this->error('注册失败');
          }
      }
      $this->display();
  }
   public function check($name){
      $rst=D('User')->where("username='$name'")->find();
      if($rst===null){
        echo "<span style='color:green; font-size: 12px;'>可以使用</span>";
      }else{
        echo "<span style='color:red; font-size: 12px;'>用户已存在</span>";
      }
      exit;
    }
 //验证码的生成
	public function verifyImg(){
    $cfg=array(
      'imageH'=>22,         //高度
      'imageW'=>70,         //宽度
      'fontSize'=>10,       //字体大小
      'length'=>4,           //长度
      'fontttf'=>'4.ttf',       //字体
      'useNoise'=>false,    // 关闭验证码杂点
    );
    $very=new \Think\Verify($cfg);
    $very->entry();
  }
  public function token(){
    $verify=$_GET['verify'];        //用户点击邮箱后，获取token的值
    $nowtime = time();          //用户打开邮箱验证的时间
    $tokenModel=D('User');
    $token=$tokenModel->checkExist($verify);
    if($token){
      /*echo "数据库中存在此用户";*/
      if($nowtime>$token['token_exptime']){      //如果30分钟内，没有验证，则会提示信息。
        $this->success("您的激活有效期已过，请登录您的帐号重新发送激活邮件.",U('login'),3);
      }else{                               //验证成功后，将数据库中的状态更新为1
        $status=1;
        $id=$token['id'];
        $result = $tokenModel->where("id=$id")->setField('status','1');
        if($result){
          $this->success("恭喜你，已经激活了邮箱，你现在可以登陆了",U('login'),3);
        }
      }
    }else{
      echo "token验证失败";
    }
  }
//用于密码的找回
  public function found(){
    layout(false);
    $username=$_POST['username'];
    $email=$_POST['email'];
    $time=date('y-m-d h:i:s',time());
    //global $check_time;
    $check_time=time();                 //用户验证邮箱的时间
    //www.nyist.com/
    $url="http://www.nyist.com/index.php/Home/User/resetpasswd/user/$username";
    //2验证用户名和邮箱是否存在
    $getModel=D('User');
    $get=$getModel->getUser($username,$email);
    //发送邮件
    if($get){
      $send=A('Token');
      $send->sendEmail_found($time,$email,$url);
    }
    $this->display();
  }
  //加载重置密码的界面
  public function resetpasswd(){
    layout(false);
    $this->display();
  }
  //重置密码提交的界面
  public function resetpasswd2($user){
    $password=md5($_POST['password']);
    $nowtime = time();          //用户打开邮箱的时间
    $updateModel=D('User');
    $data = array('password'=>"$password");
    $result=$updateModel->where("username='$user'")->setField($data); 
    if($result){    
      $this->success("密码修改成功,跳转到登录页面",U('login'),3); 
    }else{
      $this->error("密码修改失败，请重新填写");
    } 
  }
}