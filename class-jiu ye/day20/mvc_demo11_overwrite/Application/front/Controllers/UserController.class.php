<?php

class UserController extends BaseController{
	function IndexAction(){  
		//实例化模型类
		$obj = ModelFactory::M('UserModel');
		
		//获取两份数据
		$data1 = $obj->GetUserAll(); //显示所有用户信息
		$data2 = $obj->GetUserCount(); //获取用户数量
		//加载视图文件
		include VIEW_PATH . 'showAllUser_view.html';
	} 
	function DelAction(){  //删除用户
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$rec = $obj->deleteInfo($id); 
		$this->GotoUrl('删除成功！','?p=front&c=User&a=Index',3);  //这是当前对象调用父类的方法
	}
	function showOneUserAction(){  //显示用户详细信息
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$rec = $obj->showInfo($id);
		include VIEW_PATH . 'showInfo.html'; //显示用户信息
	} 
	function AddUserAction(){   //加载表单，以便添加用户信息
		include VIEW_PATH . 'addUser.html'; 
	}
	function addInfoAction(){  //添加用户
		$username = $_POST['username']; //获取表单提交的数据值（添加用户信息）
		$pwd = $_POST['pwd'];
		$age = $_POST['age'];
		$edu = $_POST['edu'];
		$aihao = $_POST['fav'];
		$fav = implode(",",$aihao); //将数组的所有项用英文逗号连起来
		$from = $_POST['from2'];
		$obj = ModelFactory::M('UserModel');
		$result = $obj->insertUserInfo($username,$pwd,$age,$edu,$fav,$from);
		$this->GotoUrl('添加用户成功','?p=front&c=user&a=Index',2);
	}
	function EditAction(){
		
	}
	function UpdateAction(){
		
	}
}
?>