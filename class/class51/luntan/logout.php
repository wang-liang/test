<?php 
session_start();
header('content-type:text/html;charset=utf-8');
require './conn.php';
if (isset($_SESSION['username'])) {
	unset($_SESSION['username']);
	mysuccess('退出成功','./index.php');
} else {
	myerror('非法操作');
}

?>