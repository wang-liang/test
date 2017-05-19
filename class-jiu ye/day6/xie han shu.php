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
/*****************函数一（求斜边长）************************/
function func1($x,$y)
{
	$s = $x*$x + $y*$y;
	$result = sqrt($s);
	return $result;
}
$v1 = func1(3,4);
echo "斜边长为：$v1"."<br />";

/***************函数二（求1-100能被3整除的偶数）******************/

function fun1($d1,$d2)
{
	for($i=$d1;$i<=$d2;$i++)
	{
		if($i%3==0 && $i%2==0)
		{
			echo $i." ";
		}
	}
}
fun1(1,100);     //调用函数

/***************函数三（求两个整数间的最大值）******************/
echo "<br />";
function getMax($v1,$v2)
{
	if($v1>$v2)
	{
		$max = $v1;
	}
	else
	{
		$max = $v2;
	}
	return $max;
}
$result = getMax(3,4);
echo "最大值为：$result"."<br />";

/***************函数三（求两个整数间的最大值）******************/

?>
</body>
</html>
