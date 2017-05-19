<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>新闻系统用户登录</title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css">
body{margin:0;padding:0;background-color:#ccc}
table{background-color:white;margin-top:150px;}
</style>
<script type="text/javascript">

//页面打开用户名获得焦点
window.onload=function(){
	document.form1.username.focus();
}
//表单验证
function checkform()
{
	if(document.form1.username.value.length == 0)
	{
		alert("用户名不能为空！");
		return false;
	}else if(document.form1.username.value.length<5 || document.form1.username.value.length>15)
	{
		alert("用户名长度必须在5-15个字符之间！");
		return false;
	}else
	{
		return true;
	}
}


</script>
</head>

<body>
<!--构建表单验证，用户登录页面-->
<!--通过action将表单提交的数据提交到login_check页面-->
<form name="form1" method="post" action="login_check.php" onsubmit="return checkform()">
<table style=" " width="300" border="1" bordercolor="#eee" align="center" cellpadding="5" rules="all">
	<tr>
		<th colspan="2">用户登录</th>
		
	</tr>
	<tr>
		<td align="right">用户名：</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td align="right">密码：</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" value="登录">
			<input type="reset" value="清除">
			<input type="hidden" name="ac" value="login">
		</td>
	</tr>
</table>
</form>
</body>
</html>
