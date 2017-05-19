<?php
//连接包含数据库
require("conn.php");
//获取地址栏中的id值
$id = $_GET["id"];
//构建删除的SQL语句
$sql = "delete from 007_news where id=$id";
//执行SQL语句，判断是否执行成功
if(mysql_query($sql))
{
	//如果执行成功
	$message = urlencode("删除id={$id}的记录成功！");
	$url = "manage.php";
	//跳转到成功页面并传值，最后通过url的值返回到新闻管理页面
	header("location:success.php?message=$message&url=$url");
}

?>