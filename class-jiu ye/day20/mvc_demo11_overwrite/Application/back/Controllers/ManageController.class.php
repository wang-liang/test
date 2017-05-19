<?php
class ManageController{
	function IndexAction(){
		session_start();
		if(!isset($_SESSION['admin_info']))
		{
			echo "登录失败！";
			header("Location:?p=back&c=Admin&a=Login");
		}
		echo "登录成功！";
		echo "欢迎你" . $_SESSION['admin_info']['admin_name'];
	}
}