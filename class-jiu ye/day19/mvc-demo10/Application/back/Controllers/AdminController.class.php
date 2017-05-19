<?php
class AdminController extends BaseController{
	function LoginAction(){
		//echo "欢迎。。。";
		include VIEW_PATH . 'login.html';
	}
	function CheckLoginAction(){
		//echo "检测用户名密码。。。";
		//接收登录表单的2个数据项：
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$model = ModelFactory::M("AdminModel");
		$result = $model->CheckAdmin($user,$pass);
		if($result === true){
			//登录成功
			//分配登录标识
			session_start();
			$_SESSION['is_login'] = 'yes';
			//跳转到后台首页
			header("Location:index.php?p=back&c=Manage&a=Index");
		}
		else{
			//失败就提示，并可以自动跳转到登录界面
			$this->GotoUrl("登录失败","?p=back&c=Admin&a=login",2);
		}
	}
}