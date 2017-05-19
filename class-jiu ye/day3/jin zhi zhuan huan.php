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
<?php
/*
使用一个表单，输入任意数字，使之可以在2，8，16进制到10进制或10进制到2，8，16进制之间转换，形式大致如下如下：
*/
/*
if(!empty($_POST))
{
	$num1 = $_POST["data1"];
	$fuhao = $_POST["yunsuanfu"];
	if($fuhao=="10to2")
	{
		$result = decbin($num1);
	}
	else if($fuhao=="10to8")
	{
		$result = decoct($num1);
	}
	else if($fuhao=="10to16")
	{
		$result = dechex($num1);
	}
}
else
{
	$num1="";
	$result="";
	$fuhao="10to2";
}
*/
?>
<form name="form1" method="post">
	数<input type="text" name="data1" value="<?php echo $num1;?>"/>
	<select name="yunsuanfu">
		<option value="10to2" <?php if($fuhao=="10to2"){echo 'selected="selected"';}?>>10to2</option>
		<option value="10to8" <?php if($fuhao=="10to8"){echo 'selected="selected"';}?>>10to8</option>
		<option value="10to16"<?php if($fuhao=="10to16"){echo 'selected="selected"';}?>>10to16</option>
	</select>
	<input type="submit" value="转换" />
	<input type="text" name="result" value="<?php echo $result;?>" />
</form>
</body>
</html>
