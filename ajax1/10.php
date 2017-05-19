<?php

header("Content-type:text/xml");
//获取账号和密码
$uname = $_POST['uname'];
$password = $_POST['password'];

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
//定义一个消息模板
$msgTpl = "<?xml version='1.0' encoding='utf-8'?>
		<response>
			<status>%s</status>
			<info>%s</info>
		</response>";
//判断
if (empty($userRec)) {
	//账号不存在
	exit(sprintf($msgTpl, "false", "账号不存在"));
} else if ($userRec['password'] != md5($password)) {
	//密码不正确
	exit(sprintf($msgTpl, "false", "密码不正确"));
} else {
	//登录成功
	exit(sprintf($msgTpl, "true", "登录成功"));
}
