<?php

class UserController extends BaseController{
	function detailAction(){
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$data = $obj->showInfo($id);
		include './showInfo_view.html';//显示用户详细信息
	}
	function addUserAction(){
		include './addUser.html';
	}
	function addInfoAction(){
		//接收表单数据
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$age = $_POST['age'];
		$edu = $_POST['edu'];
		$aihao = $_POST['fav'];
		$fav = implode(',',$aihao);
		$from = $_POST['from2'];
		$obj = ModelFactory::M('UserModel');
		$result = $obj->insertUserInfo($username,$pwd,$age,$edu,$fav,$from);
		$this->GotoUrl('添加用户成功！','?',3);//调用父类方法（基础控制器类）
	}
	function DelAction(){
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$result = $obj->delUserByid($id);
		$this->GotoUrl('删除成功！','?',3);
	}
	function EditAction(){
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$user = $obj->GetUserInfoById($id);
		$fav = explode(',',$user['fav']);
		include './user_Form_view.html';
	}
	function UpdateUserAction(){
		//接收表单数据
		$id = $_POST['id'];
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$age = $_POST['age'];
		$edu = $_POST['edu'];
		$fav = $_POST['fav'];
		$aihao = implode(',',$fav);
		$from = $_POST['from2'];

		$obj = ModelFactory::M('UserModel');
		$result = $obj->UpdateUser($id,$username,$pwd,$age,$edu,$aihao,$from);
		$this->GotoUrl('修改用户成功！','?',3);
	}
	function IndexAction(){
		$obj_user = ModelFactory::M('UserModel');
		$data1 = $obj_user->GetUserAll();
		$data2 = $obj_user->GetUserCount();
		//加载视图，显示两份数据
		include './showAllUser_view.html';
	}

}

