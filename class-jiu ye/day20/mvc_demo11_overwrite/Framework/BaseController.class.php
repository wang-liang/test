<?php
class BaseController{
	function __construct(){
		header("content-type:text/html;charset=utf-8");
	}
	
	function GotoUrl($msg,$url,$time){
		echo "<font color='red'>$msg</font>";
		echo "<br /><a href='$url'>返回</a>";
		echo "<br />页面将在{$time}秒后跳转";
		header("refresh:$time;url=$url"); //页面在xxx秒后跳转
	}
	
}
//header("refresh:$time;url=$url");
?>