<?php 
header('content-type:text/html;charset=utf-8');
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'root';
$db_name = 'db_bbs';
$conn = mysql_connect($db_host,$db_user,$db_pwd);
if(!$conn){
	exit('连接数据库失败');
}
//选择数据库
mysql_select_db($db_name) or die('选择数据库失败');
//设置字符集
mysql_query('set names utf8');

//自定义小函数
//处理失败的函数
function myerror($message){
	header("location:error.php?message=$message");
}
//处理成功的小函数
function mysuccess($message,$url){
	header("location:success.php?message=$message&url=$url");
}
?>