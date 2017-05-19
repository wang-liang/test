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
if(!empty($_POST))
{
	$num1=$_POST["data1"];
	$num2=$_POST["data2"];
	$fuhao=$_POST["yunsuanfu"];
	if($fuhao=="+")
	{
		$jieguo = $num1 + $num2;
	}
	else if($fuhao=="-")
	{
		$jieguo = $num1 - $num2;
	}
	else if($fuhao=="*")
	{
		$jieguo = $num1 * $num2;
	}
	else if($fuhao=="/")
	{
		$jieguo = $num1 / $num2;
	}
	else if($fuhao=="%")
	{
		$jieguo = $num1 % $num2;
	}
}
else
{
	$jieguo="";
	$num1="";
	$num2="";
	$fuhao="";
}
?>
<form method="post" name="form1">
<input type="text" name="data1" value="<?php echo $num1;?>">
<select name="yunsuanfu">
	<option value="+"  <?php if($fuhao=="+"){echo 'selected="selected"';}?>>+</option>
	<option value="-"  <?php if($fuhao=="-"){echo 'selected="selected"';}?>>-</option>
	<option value="*"  <?php if($fuhao=="*"){echo 'selected="selected"';}?>>*</option>
	<option value="/"  <?php if($fuhao=="/"){echo 'selected="selected"';}?>>/</option>
	<option value="%"  <?php if($fuhao=="%"){echo 'selected="selected"';}?>>%</option>
</select>
<input type="text" name="data2" value="<?php echo $num2;?>">
<input type="submit" value="计算">
<input type="text" name="result" value="<?php echo $jieguo;?>">
</form>
</body>
</html>
