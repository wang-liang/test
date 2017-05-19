<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户注册</title>
<link href='./images/public.css' rel='stylesheet' type='text/css'>
<!--前台JS表单验证-->
<script type="text/javascript">
	function check(){
		//4,12之间
		if(form1.username.value.length<4 || form1.username.value.length>12){
			alert('用户名应该在4到12字符之间');
			return false;
		}
		if(form1.password.value.length<4 || form1.password.value.length>12){
			alert('密码应该在4到12字符之间');
			return false;
		}
		if(form1.password.value != form1.repassword.value){
			alert('两次密码不一致');
			return false;
		}
		if(form1.name.value.length<2){
			alert('请输入真实姓名');
			return false;
		}

	}
</script>
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
	<form name="form1" method="post" action="register_save.php" onsubmit="return check()">
	<table width="600" border="0" align="center">
		<tr>
			<th width="100" align="right"><span class="rq">*</span> 用 户 名：</th>
			<td><input type="text" name="username"  size="25" class="px"></td>
		</tr>
		<tr>
			<th align="right"><span class="rq">*</span> 输入密码：</th>
			<td><input name="password" type="password" size="25" class="px"></td>
		</tr>
		<tr>
			<th align="right"><span class="rq">*</span> 重复密码：</th>
			<td><input name="repassword" type="password" size="25" class="px"></td>
		</tr>
		<tr>
			<th align="right"><span class="rq">*</span> 真实姓名：</th>
			<td><input name="name" type="text" size="25" class="px"></td>
		</tr>
		<tr>
			<th align="right"><span class="rq">*</span> 选择头像：</th>
			<td>
				<img src="./selectimg/avatar1.jpg" id='idface'>
				<select name="face" onchange="document.getElementById('idface').src=this.value">
					<script type="text/javascript">
						for(var i =1; i<=10; i++){
							document.write("<option value=./selectimg/avatar"+i+".jpg>头像"+i+"</option>");
						}
					</script>
					
				</select>
			</td>
		</tr>
		<tr>
			<th align="right"><span class="rq">*</span> 验证码：</th>
			<td>
				<input name="checkcode" type="text" maxlength='4' style='width:50px;' class="floatL px">
				<img style="float:left;margin-left:10px;" src="./code.php">

			</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td>
				<input type="submit" name="submit" value="立即注册"></input>
			</td>
		</tr>
	</table>
	</form>
</div><!--//用户注册-->
<?php
//包含页脚文件
include_once('./footer.php');
?>