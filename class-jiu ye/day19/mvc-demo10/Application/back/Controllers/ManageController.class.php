<?php
//后台管理首页
class ManageController extends BaseController{
	public function IndexAction(){
		//判断是否具有登录表示
		session_start();
		if(!isset($_SESSION['is_login'])){
		// 没有标识，跳转到登陆页面
		header('Location: index.php?p=back&c=Admin&a=Login');
		die();
		}
		
		// 提示
		echo '这里是后台首页! 不久会被更好的实现！';
	}
}