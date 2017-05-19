<?php
class AdminController extends BaseController{
	function LoginAction(){
		include VIEW_PATH . 'Login.html';
	}
	function CheckLoginAction(){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$obj = ModelFactory::M('LoginModel');
		$admin_info = $obj->CheckAdminInfo($user,$pass);

		if($admin_info)
		{
			session_start();
			$_SESSION['admin_info'] = $admin_info;
			header("Location:?p=back&c=Manage&a=Index");
		}
		else
		{
			//echo "登录失败，请重新输入！";
			$this->GotoUrl('登录失败，请重新输入！','?p=back&c=Admin&a=Login',6);
		}
	}
}