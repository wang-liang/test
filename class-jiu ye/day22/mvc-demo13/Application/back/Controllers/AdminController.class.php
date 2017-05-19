<?php
class AdminController extends PlatformController{
	function LoginAction(){
		//echo "欢迎。。。";
		include VIEW_PATH . 'login.html';
	}
	function CheckLoginAction(){
		//实例化工具类
		$t_captcha = new Captcha();
		//验证码是否正确
		if(!$t_captcha->checkCode($_POST['captcha'])){
			//不正确，跳转到登录页面，提示
			$this->gotoUrl("验证码不正确","index.php?p=back&c=Admin&a=Login",2);
			//停止脚本执行！
			die;
		}
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
			// 设置记录登录状态
			if(isset($_POST['remember'])){
				//需要记录，通常是在原始数据添加混淆字符串后，再加密
				setcookie('admin_id',md5($admin_info['id'] . 'ABCDE'),PHP_INT_MAX);
				setcookie('admin_pass',md5($admin_info['admin_pass'] . 'ABCDE'),PHP_INT_MAX);
			}
			//跳转到后台首页
			header("Location:index.php?p=back&c=Manage&a=Index");
		}
		else{
			//失败就提示，并可以自动跳转到登录界面
			$this->GotoUrl("登录失败","?p=back&c=Admin&a=login",2);
		}
	}
	public function CaptchaAction(){
		//通过验证码工具类完成即可
		$t_captcha = new Captcha();
		$t_captcha->makeImage();
	}
}