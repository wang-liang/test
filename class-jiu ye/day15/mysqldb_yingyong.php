<?php
require './MySQLDB.class.php';
$config = array(
	'host' =>"localhost",
	'port' => 3306,
	'user' => "root",
	'pass' => "root",
	'charset' => "utf8",
	'dbname' => "php44"
);
$db1 = new MysqlDB($config); // 实例化

$v1 = rand(0,100);	//获取0到100之间的随机数
$sql = "insert into tab_int(f1,f2,f3)values($v1,12, 13)";
$db1->exec($sql);
echo "执行插入语句成功！<br />";

$sql = "select * from info where id = 6";
$user = $db1->GetOneRow($sql); //这里返回就是一个数组
echo "<br />用户ID为：" . $user['id'];
echo "<br />用户名：" . $user['username'];
echo "<br />年龄" . $user['age'];
echo "<br />学历" . $user['edu'];
echo "<br />兴趣" . $user['fav'];
echo "<hr />";

?>