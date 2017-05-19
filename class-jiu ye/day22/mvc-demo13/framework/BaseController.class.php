<html>
<?php
class BaseController{
	function __construct(){
		header("content-type:text/html;charset=utf-8");
	}
	//显示一定简短提示文字，然后自动跳转（可以设定停留的时间秒数）
	function GotoUrl($msg,$url,$time){
		echo "<font color=red>$msg</font>";  //跳转提示信息
		echo "<br /><a href='$url'>返回</a>"; //点击返回时的链接地址
		echo "<br />页面将在{$time}秒之后跳转"; 
		header("refresh:$time;url=$url"); //在xxx秒后自动跳转，跳转到当前页面
		//这是html中的跳转，url为要跳转的网页地址
		//<meta http-equiv="refresh" content="3;url=$url" >
	}
}