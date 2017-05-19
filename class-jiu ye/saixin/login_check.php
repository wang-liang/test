<?php
require("conn.php");

//login_check.php页面用来处理来自于表单提交过来的数据
//在这个页面会有三个值传过来username、password和 ac（这里的ac就是隐藏域的值）
//表单提交方式$_POST[]和$_GET[]接收到的是一个数组

//判断数据是否来自于ac=login的表单（判断ac的值是否存在）
if(isset($_POST["ac"]) && $_POST["ac"]=="login")
{
	//获取表单提交值
	$username = $_POST["username"];
	$password = md5($_POST["password"]);

	//构建查询的SQL语句
	//从007_admin数据表中查找用户名和密码与地址栏中的数据进行比对
	$sql = "select * from 007_admin where username='$username' and password='$password'";
	$result = mysql_query($sql); //执行SQL语句
	$records = mysql_num_rows($result); //记录从结果集中获取的总数（有多少条记录）
	//判断是否找到匹配
	if($records==1)
	{
		//如果找到，更新用户信息
		$lastloginip = $_SERVER["REMOTE_ADDR"]; //获取客户端IP地址（系统函数）
		$lastlogintime = time();
		$sql = "update 007_admin set lastloginip='$lastloginip',lastlogintime=lastlogintime,loginhits=loginhits+1 where username='$username'";
		//如果执行成功，跳转到登录成功页面
		if(mysql_query($sql))
		{
			$url="manage.php"; 
			$message = urlencode("用户登录成功！");
			//跳转到登录成功页面并传值到登录成功页面，最后通过url的值返回到新闻管理页面
			header("location:success.php?url=$url&message=$message");
		}

	}
	else
	{
		//如果没有找到匹配，跳转到error.php页面
		$message = urlencode("用户名或密码不正确");
		header("location:error.php?message=$massage");
	}

}else
{
	$message = urlencode("非法登录");
	header("location:error.php?message=$massage");
	//或者使用下面JS代码跳转
	//echo "<script>location.href='error.php?message=$massage'</script>"
}
?>