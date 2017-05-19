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
$arr = array(2,3,43,4,21,24,15,13);
$n = count($arr);
for($i=0;$i<$n-1;$i++)  
{
	for($k=0;$k<$n-$i-1;$k++)
	{
		if($arr[$k]>$arr[$k+1])
		{
			$t = $arr[$k];
			$arr[$k] = $arr[$k+1];
			$arr[$k+1] = $t;
		}
	}
}
print_r($arr)."<br />";


//选择排序
$n = count($arr);
$max = $arr[0];
$pos = 0;
for($i=0;$i<$n-1;$i++)
{
	for($k=0;$k<$n-$i;$k++)
	{
		if($arr[$k]>$max)
		{
			$max = $arr[$k];
			$pos = $k;
		}
	}
}
if($arr[$pos]>$arr[$n-$i-1])
{
	$t = $arr[$pos];
	$arr[$pos] = $arr[$n-$i-1];
	$arr[$n-$i-1] = $t;
}
print_r($arr);


?>
</body>
</html>
