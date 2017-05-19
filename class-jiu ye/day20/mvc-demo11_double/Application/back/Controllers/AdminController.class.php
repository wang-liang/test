<?php
class AdminController extends BaseController{
	function LoginAction(){
		include VIEW_PATH . 'Login.html';
	}
	function CheckLoginAction(){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$model = ModelFactory::M('AdminModel');
		$admin_info = $model->CheckAdminInfo($user,$pass);
		if($admin_info)
		{
			session_start();
			$_SESSION['admin_info'] = $admin_info;
			header('location:?p=back&c=Manage&a=Index');
		}
		//echo "登录失败！";
		$this->GotoUrl('登录失败！','?p=back&c=Admin&a=Login',2);
	}
}