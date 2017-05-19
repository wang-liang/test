<?php
//声明当前网页字符集
header("content-type:text/html;charset=utf-8");
//配置MySQL数据库的信息
$db_host="localhost";
$db_user="root";
$db_pwd="root";
$db_name="news";
//PHP链接数据库
$link= @mysql_connect($db_host,$db_user,$db_pwd);
if(!$link)
{
	echo "PHP连接数据库失败！";
	exit();
}
if(!mysql_select_db($db_name))
{
	echo "选择数据库｛$db_name｝失败！";
	exit();
}
//设置MySQL返回数据的字符集
mysql_query("set names utf8");

/******************dump()*******************/
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

?>