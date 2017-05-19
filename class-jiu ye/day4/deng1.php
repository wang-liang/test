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
$b1=microtime(true);
for($i=1;$i<10000000;$i++){}
$b2=microtime(true);
for($i=1;$i<10000000;++$i){}
$b3=microtime(true);
echo $b3-$b2."<br />";
echo $b2-$b1."<br />";

$v1 = 10 << 4;
echo "<br />v1 = $v1";

echo "<br />";
//首先设定5个常量代表对应的5个灯
define("D1",1);
define("D2",2);
define("D3",4);
define("D4",8);
define("D5",16);
$state = 6;
//查看某一盏灯的状态
if(($state & D4) > 0)
{
	echo "<br/>灯1亮";
}
else
{
	echo "<br/>灯1灭";
}
//所有灯整体的初始状态
function showAll()
{
	echo "<p>";
	for($i=1;$i<=5;++$i)
	{
		$s = "D".$i;
		if(($GLOBALS['state'] & constant($s))>0)
		{
			echo "{$i}灯亮";
		}
		else
		{
			echo "{$i}灯灭";
		}
	}
	echo "</p>";
}
echo "<br />初始所有灯的状态：";
showAll();

//打开某一盏灯
//$state = $state | 对应灯的常量
$state = $state | D3;
echo "<br />灯2打开：";
showAll();

//关闭某一盏灯
//$state = $state & （~对应某盏灯的常量）
$state = $state &(~D5);
echo "<br />灯4关闭后：";
showAll();
?>
</body>
</html>
