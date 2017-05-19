<?php
//上面四行代码，都加载到index.php请求分发器中

class UserController extends BaseController{  //继承父类
	function detailAction(){
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel'); 
		$data = $obj->showInfo($id);
		//加载视图文件，显示用户详细信息
		include VIEW_PATH . 'showInfo_view.html';   //视图的路径用常量代替
	}
	function addUserAction(){
		//这里加载要插入的表单页面
		include VIEW_PATH . 'addUser.html';  
	}
	function addInfoAction(){
		//接收表单数据
		$username = $_POST['username']; //$username是变量，用于存储获取的值，username是表单中的name值
		$pwd = $_POST['pwd'];  //其中用于存储数据的变量必须和方法中的参数一致
		$age = $_POST['age'];
		$edu = $_POST['edu'];
		$aihao = $_POST['fav'];  //这里是数组，需要额外处理
		$fav = implode(",",$aihao); //将数组的所有项用英文逗号“,”连接起来
		$from = $_POST['from2'];
		$obj = ModelFactory::M('UserModel');  
		$result = $obj->insertUserInfo($username,$pwd,$age,$edu,$fav,$from);  //调用模型对象的函数，插入一条数据
		//echo "<font color=red>插入成功！</font>";  
		//echo "<a href='?'>返回</a>";
		//有了基础控制器类，这一行代替上两行
		$this->GotoUrl('添加用户成功！','?',3); //调用父类的方法
	}
	function DelAction(){
		$id = $_GET['id'];  
		$obj = ModelFactory::M('UserModel'); 
		$result = $obj->delUserByid($id);  //调用模型对象的函数，删除指定的id记录
		//echo "<font color=red>删除成功！</font>";  
		//echo "<a href='?'>返回</a>";
		$this->GotoUrl('删除成功！','?',3); //调用父类的方法
	}
	function EditAction(){ 
		$id = $_GET['id'];  //接收<a>链接“修改”传过来的id值
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('UserModel');
		$user = $obj->GetUserInfoById($id); //这是从数据库中返回的一条记录，是一个一维数组
		//兴趣爱好，需要单独处理，fav是表中的字段名
		$fav  = explode(',',$user['fav']); //这里，将这种字符串数据"排球,篮球,足球"
										   //使用指定的字符(,)，分割为一个数组
		include VIEW_PATH . 'user_Form_view.html';
	}
	function UpdateUserAction(){
		//接收表单数据
		$id = $_POST['id'];  //这里获取表单中隐藏域的id值
		$username = $_POST['username']; //$username是一个变量，username是表单中的name属性的值
		$pwd = $_POST['pwd'];
		$age = $_POST['age'];
		$edu = $_POST['edu'];
		$fav = $_POST['fav'];  //这是数组，需要额外处理，fav是表单中的name值
		$aihao = implode(",",$fav); //将数组的所有项用英文逗号连起来，组成一个长字符串
		$from = $_POST['from2'];

		$obj = ModelFactory::M('UserModel');
		$result = $obj->UpdateUser($id,$username,$pwd,$age,$edu,$aihao,$from);
		//echo "<font color=red>修改用户成功！</font>";
		//echo "<a href='?'>返回</a>"; 
		$this->GotoUrl('修改用户成功！','?',3); //调用父类的方法
	}
	function IndexAction(){
		//实例化模型类，并从中取得2份数据
		//$obj_user = new UserModel();  //这一行使用下一行代替
		$obj_user = ModelFactory::M('UserModel');  
		$data1 = $obj_user->GetUserAll(); //是一个二维数组，获得所有用户信息
		$data2 = $obj_user->GetUserCount();  //是一个数字，获得当前用户数量
		 //加载视图文件，以显示该两份数据
		include VIEW_PATH . 'showAllUser_view.html'; 
	}
}
