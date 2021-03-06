<?php
//后台back的平台控制器

class PlatformController extends BaseController{
	public function __construct(){
		//强制调用父类被重写的构造方法
		parent::__construct();  
		//校验是否登录
		$this->_check();  //当前对象调用自己的方法
	}
	//校验是否登录
	protected function _check(){
		//开启session
		session_start();
		//判断当前请求是否为特例，是否需要校验
		//获得当前控制器和当前动作
		$curr_controller = strtolower(CONTROLLER); //当前控制器
		$curr_action = strtolower(ACTION); //当前动作
		//条件，当前控制器为admin,并且动作为login或者checklogin
		if($curr_controller=='admin'&&($curr_action=='login' || $curr_action=='checklogin'))
		{
			//不需要校验，函数内后续代码不需要执行
			return;
		}
		//判断是否具有登录标识,session
		if(!isset($_SESSION['admin_info']))
		{
			// 没有标识
			//判断COOKIE中，是否记录登录状态
			//admin_id存在 && admin_pass存在 && 数据库验证通过
			$m_admin = ModelFactory::M('AdminModel');
			if( isset($_COOKIE['admin_id']) && isset($COOKIE['admin_pass']) && $admin_info =  $m_admin->CheckCookieInfo($_COOKIE['admin_id'],$_COOKIE['admin_pass']) )
			{
				//具有登录状态，设置session中的登录标识
				$_COOKIE['admin_info'] = $admin_info;
			}else{
				//没有记录登录状态
				//没有标识，跳转到登录页面
			header('Location: index.php?p=back&c=Admin&a=Login');
			die();
			}
		}
	}
}