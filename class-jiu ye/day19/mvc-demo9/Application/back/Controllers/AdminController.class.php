<?php
class AdminController extends BaseController{
	function LoginAction(){
		echo "欢迎。。。";
		include './Application/back/view/login.html';
	}
}