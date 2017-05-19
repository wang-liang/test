<?php
class ManageController extends BaseController{
	function IndexAction(){
		if(!isset($_SESSION['admin_info'])){
			header("location:?p=back&c=Admin&a=Login");
		}
		else{
			echo "登录成功";
			echo  "欢迎：" . $_SESSION['admin_info']['admin_name'];
		}
	}
}