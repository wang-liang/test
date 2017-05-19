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
		//获取管理员信息，当管理员信息合法时，返回管理员信息（array）
		//当管理员信息不合法时，返回false
		$admin_info = $model->CheckAdminInfo($user,$pass);
		//var_dump($admin_info);
		//die();

		if($admin_info == true){
			//登录成功
			//分配登录标识
			session_start();
			$_SESSION['admin_info'] = $admin_info;
			//跳转到后台首页
			header("Location:index.php?p=back&c=Manage&a=Index");
		}
		else{
			//失败就提示，并可以自动跳转到登录界面
			$this->GotoUrl("登录失败","?p=back&c=Admin&a=login",2);
		}
	}
}