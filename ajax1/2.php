<?php

header("Content-type:text/html;charset=utf-8");
/*
 * 接收AJAX请求
 */
sleep(2);	//让http飞一会
//获取账号和密码
$uname = $_GET['uname'];
$password = $_GET['password'];

//连接数据库  查询账号信息 并验证 返回结果
try {
	$pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "", array(
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	));
} catch (PDOException $ex) {
	echo $ex->getMessage();
}

$sql = "SELECT * FROM user WHERE uname='{$uname}'";
$userRec = $pdo->query($sql)->fetch();
//判断
if (empty($userRec)) {
	//账号不存在
	echo "账号不存在";
} else if ($userRec['password'] != md5($password)) {
	//密码不正确
	echo "密码不正确";
} else {
	//登录成功
	echo "登录成功";
}