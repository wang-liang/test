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
define("PI",3.14);
if(defined("PI"))
{
	echo "<br />常量PI已经存在";
}
else
{
	echo "<br />常量PI不存在";
}

$s3 = PI * 5 * 5;
echo "<br />面积为：$s3";

if(defined("G"))
{
	echo "<br / >常量已经存在";
}
else
{
	echo "<br />常量G不存在";
	define("G",9.8);
}
$s4 = G * 6;
echo "<br />速度为：$s4";

$n1 = 123;  //这是10进制的一个数字
$s1 = decbin($n1); //将10进制转换为2进制
$s2 = decoct($n1); //将10进制转换为8进制
$s3 = dechex($n1); //将10 进制转换为16进制

echo "<br/ >$n1 的2进制形式为：$s1";
echo "<br/ >$n1 的8进制形式为：$s2";
echo "<br/ >$n1 的16进制形式为：$s3";

$v1 = 0x123;
echo "<br/ >".$v1;


?>
</body>
</html>
