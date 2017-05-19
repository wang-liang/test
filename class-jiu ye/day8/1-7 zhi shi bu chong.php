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
/*1，输出1-100之间的所有能被3整除但不能被7整数的数；*/
for($i=1;$i<=100;$i++)
{
	if($i%3==0 && $i%7!=0)
	{
		echo $i." ";
	}
}
echo "<br />";
/*2，写一个函数，该函数可以输出1-100之间的所有能被3整除但不能被7整数的数；*/
function f1($n)
{
	if($n%3==0 && $n%7!=0)
	{
		return $n;
	}
}
for($n=1;$n<=100;$n++)
{
	$v1 = f1($n);
	echo $v1." ";
}
/*3，写一个函数，该函数可以求出1-100之间的所有能被3整除但不能被7整数的数的和；*/
echo "<br />";
$sum = 0;
function f2($n)
{
	if($n%3==0 && $n%7!=0)
	{
		return $n;
	}
}
for($n=1;$n<=100;$n++)
{
	$v1 = f2($n);
	$sum += $v1;
}
echo $sum . "<br />";
/*4，写一个函数，该函数可以求出任意给定的2个数之间的所有能被3整除但不能被7整数的数的和*/
echo "<br />";

function f3($s1,$s2)
{
	function f4($n)
	{
		if($n%3==0 && $n%7!=0)
		{
			return $n;
		}
	}
	$sum = 0;
	for($n=$s1;$n<=$s2;$n++)
	{
		$v1 = f4($n);
		$sum += $v1;
	}
	return $sum;
}
$v2 = f3(1,100);
echo $v2 . "<br />";
/*5，写一个页面表单，该表单可以输入2个数，并提交后可以求出这2个数之间的所有能被3整除但不能被7整除的数的和（显示出来）。*/
if(!empty($_POST))
{
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	function f5($s1,$s2)
	{
		function func($n)
		{
			if($n%3==0 && $n%7!=0)
			{
				return $n;
			}
		}
		$sum = 0;
		for($n=$s1;$n<=$s2;$n++)
		{
			$v1 = func($n);
			$sum += $v1;
		}
		return $sum;
	}

	echo f5($d1,$d2);
}
else
{
	$d1 = "";
	$d2 = "";
}
?>
<form method="post" action="">
	<input type="text" name="d1">
	<input type="text" name="d2">
	<input type="submit" value="提交">
</form>
</body>
</html>
