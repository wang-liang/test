<?php
session_start();
header('content-type:text/html;charset=utf-8');
require './conn.php';
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$addate = time();
	$uid = $_SESSION['userid'];//从session取出用户的ID
	//SQL
	$sql = "insert into thread values(null,'$uid','$title','$content','$addate')";
	if(mysql_query($sql)){
		mysuccess('发贴成功','./list.php');
	}else{
		myerror('发贴失败');
	}
} else {
	myerror('非法发贴');
}

?>