<?php 
session_start();
header('content-type:text/html;charset=utf-8');
require './conn.php';
if (isset($_POST['submit'])) {
	//从表单中获取值
	$code = $_POST['checkcode'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];
	$face = $_POST['face']; //用户的头像路径
	$lastlogintime = time(); //用户最近登录时间
	$lastloginip = $_SERVER['REMOTE_ADDR']; //用户远程IP
	$addate = time();//用户的注册时间
	//对验证码进行验证
	if(strtoupper($code) != $_SESSION['code']){
		myerror('验证码不正确');
		exit;
	}

	//用户名进行判断, 用户名是不是已经被注册
	//构建SQL语句,查询一下,现有用户表中有没有重名
	$sql = "select username from user where username = '$username'";
	//执行SQL语句
	$result = mysql_query($sql);
	//mysql_num_rows — 取得结果集中行的数目
	if(mysql_num_rows($result)==1){
		//如果用户名已经被注册
		myerror('用户名已经被注册');
	}else{
		//如果用户名没有被注册,执行下面的代码
		//将用户的信息,添加到数据库
		//SQL
		$sql = "insert into user values(null,'$username','$password','$name','$face','$lastlogintime','$lastloginip','$addate')";
		//执行SQL
		if(mysql_query($sql)){
				mysuccess('注册成功','./login.php');
		}else{
				myerror('注册失败');
		}
	}
} else {
	myerror('非法注册');;
}

?>