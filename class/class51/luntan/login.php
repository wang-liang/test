<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
<link href='./images/public.css' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
//包含头部文件
include_once('./header.php');
?>
<!--用户注册-->
<div class="blank10"></div>
<div class="register">
	<div class="title">
		<span class="spanL">立即注册</span>
		<span class="spanR">已有账号？现在登录</span>
	</div>
	<form name="form1" method="post" action="login_save.php">
	<table width="600" border="0" align="center">
		<tr>
			<th width="100" align="right"><span class="rq">*</span> 用 户 名：</th>
			<td><input type="text" name="username"  size="25" class="px" value="<?php echo isset($_COOKIE['reme'])?$_COOKIE['reme']:''?>"></td>
		</tr>
		<tr>
			<th align="right"><span class="rq">*</span> 输入密码：</th>
			<td><input name="password" type="password" size="25" class="px"></td>
		</tr>
		<tr>
			<th align="right"></th>
			<th >
				<input type="checkbox" name="rem" value="604800"></input>是否保留用户名一周
		</th>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td>
				<input type="submit" name="submit" value="登　录"></input>
			</td>
		</tr>
	</table>
	</form>
</div><!--//用户注册-->
<?php
//包含页脚文件
include_once('./footer.php');
?>