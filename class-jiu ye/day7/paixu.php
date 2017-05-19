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

//冒泡排序
//1，假设数组的数据有ｎ个。
//2，要进行比较的“趟数”为ｎ－１；
//3，每一趟要比较之后数据个数都比前一趟少一个，第一趟要比较ｎ－１次
//4，每一次比较，如果发现“左边数据”大于“右边数据”，就对这两者进行交换位置。

$arr = array(9,3,4,7,2,5,);
//获取数组长度(个数)
$n = count($arr);
//$i代表趟数，需要进行$n-1趟
for($i=0;$i<$n-1;$i++)
{
	//这里代表每一趟比较所需要的次数，第一次比较需要$n-1次
	//每经过一次比较，数组中的个数减1，也就是减去$i($i从0开始)
	for($k=0;$k<$n-$i-1;$k++)
	{
		//这里$k也可以用作下标
		//当$i=0时，$k<$n-1，即$k<5(下标从0到4)，也就是5次
		if($arr[$k]>$arr[$k+1])
		{
			$temp = $arr[$k];
			$arr[$k] = $arr[$k+1];
			$arr[$k+1] = $temp;
		}
	}
}
echo "<br />排序之后：";print_r($arr);
/*
//选择排序
$arr = array(9,3,4,7,2,5,11);

$n = count($arr);
for($i=0;$i<$n-1;$i++)
{
	$max = $arr[0];
	$pos = 0;
	for($k=0;$k<$n-$i;$k++)
	{
		if($arr[$k]>$max)
		{
			$max = $arr[$k];
			$pos = $k;
		}
	}
	$temp = $arr[$pos];
	$arr[$pos] = $arr[$n-$i-1];
	$arr[$n-$i-1] = $temp;
}
echo "<br />排序之后：";print_r($arr);
*/
?>
</body>
</html>
