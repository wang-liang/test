<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>网页标题</title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css"></style>
<script type="text/javascript">

</script>
</head>

<body>
?>
<form name="form1" action="" method="post">
<table>
	 <h1>添加数据</h1>
	 用户名：<input type="text" name="username"><br/>
	 密码:<input type="password" name="password"><br/>
	 年龄：<input type="text" name="age"><br/>
	 学历：<select name="xueli">
		<option value="小学">小学</option>
		<option value="中学">中学</option>
		<option value="大学">大学</option>
		<option value="硕士">硕士</option>
		<option value="博士">博士</option>
	 </select><br/>
	 兴趣爱好：
	 <input type="checkbox" name="aihao[]" value="排球" >排球
	 <input type="checkbox" name="aihao[]" value="篮球">篮球
	 <input type="checkbox" name="aihao[]" value="足球">足球
	 <input type="checkbox" name="aihao[]" value="中国足球">中国足球
	 <input type="checkbox" name="aihao[]" value="地球">地球<br/>

	 来自：<input type="radio" name='from' value="东北">东北
	 <input type="radio" name='from' value="华北">华北
	<input type="radio" name='from' value="西北">西北
	<input type="radio" name='from' value="华东">华东
	<input type="radio" name='from' value="华北">华北
	<input type="radio" name='from' value="华西">华西<br/>

	<input type="submit" value="提交" >
</form>
<?php

?>
</body>
</html>
