<?php
session_start();
header('content-type:text/html;charset=utf-8');
require './conn.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$lastlogintime = time();
	$lastloginip = $_SERVER['REMOTE_ADDR'];
	//判断是否登录成功
	//SQL
	$sql = "select * from user where username = '$username' and password = '$password'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) ==1){
		//登录成功
		//更新用户最后登录时间及IP
		$sql = "update user set lastlogintime = '$lastlogintime', lastloginip = '$lastloginip' where username = '$username'";
		mysql_query($sql);
		//当用记勾选了记住用户名时候的处理,保存为cookie
		if(isset($_POST['rem'])){
			setcookie('reme',$username,time()+$_POST['rem']);
		}
		//将用户名写入session, 目的是为了在其它页面判断用户是否已经登录. 
		//如用户有没有权限发贴,有没有权限回复
		$_SESSION['username'] = $username; //将用户名写入session
		//在发贴时候,需要用到用户的ID,我们将用户的ID写入session,然后就可以在发贴的页面使用.
		//将用户的ID添加到发贴表中,在发贴表(thread)中字段为uid. 
		$row = mysql_fetch_assoc($result); //登录成功之后的查询结果集可以直接使用.
		$_SESSION['userid'] = $row['id'];  //将用户的ID写入session;

		mysuccess('登录成功','./index.php');
	}else{
		//登录失败
		myerror('用户名或密码错误');
	}
} else {
	myerror('非法登录');
}

?>