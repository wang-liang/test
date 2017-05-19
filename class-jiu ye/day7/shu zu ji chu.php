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
header("Content-Type:text/html;charset=UTF-8");
//求一个一维数组的平均值
$a = array(1,2,3,4,5,6);
$sum = 0;
$c = 0;
for($i=0;$i<count($a);$i++)
{
	$sum += $a[$i];
	++$c;
}
echo "<br />平均值为：" . ($sum/$c);

//
$sum = 0;
$c = 0;
$a = array(
	array(1,2,3,4,5,6),
	array(1,2,3,4,5,6),
	array(1,2,3,4,5,6)
);
for($i=0;$i<count($a);$i++)
{
	$temp = $a[$i];
	$len = count($temp);
	for($k=0;$k<$len;++$k)
	{
		$sum += $temp[$k];
		++$c;
	}
}
echo "<br />平均值为：" . ($sum/$c);

//
$arr = array(2,12,22,44,35,20);
$max = $arr[0];     //用来存储最大值，假设第一项最大
for($i=0;$i<count($arr);++$i)
{
	if($arr[$i]>$max)
	{
		$max = $arr[$i];
		$pos = $i;
	}
}
echo "<br />最大值为：" . $max . ",其下标为：" . $pos;

//
$arr1 = array(2,12,22,44,35,20);
$max = $arr1[0];
$min = $arr1[0];
$pos2 = 0;
for($i=0;$i<count($arr1);++$i)
{
	if($arr1[$i]>$max)
	{
		$max = $arr1[$i];
		$pos = $i;
	}
	if($arr1[$i]<$min)
	{
		$min = $arr1[$i];
		$pos2 = $i;
	}
}
echo "<br />最大值为：" . $max . ",其下标为：" . $pos;
echo "<br />最小值为：" . $min . ",其下标为：" . $pos2;

//开始交换
$temp = $arr1[$pos];
$arr1[$pos] = $arr1[$pos2];
$arr1[$pos2] = $temp;

?>  
</body>
</html>
