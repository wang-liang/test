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
/*求此数组的平均值：*/
$a3 = array(
	array(11,12, 13),
	array(21,22,23, 24, 25),
	array(31,32,33, 35),
	array(41,42,43)
);
$len = count($a3);
$sum = 0;
$count = 0;
for($i=0;$i<$len;$i++)
{
	$len1 = count($a3[$i]);
	for($j=0;$j<$len1;$j++)
	{
		$sum += $a3[$i][$j];
		$count++;
	}
}
echo "平均值为：".($sum/$count)."<br />";

/*求一个整数数组中的最小的奇数，如果没有奇数，则直接输出“没有奇数”，否则输出该数。*/

$arr = array(2,3,43,4,21,24,15,13);
$arr1= array();  //空数组，用于准备存放所有奇数
foreach($arr as $key => $value)
{	
	if($value%2==1)
	{
		$arr1[] = $value;
	}
}
	if(count($arr1) == 0)
	{
		echo "没有奇数";
	}
	else //就是奇数
	{
		$min = $arr1[0];
		foreach($arr1 as $value)
		{
			if($value<$min)
			{
				$min = $value;
			}
		}
	echo "最小奇数为：$min";
	}


?>
</body>
</html>
