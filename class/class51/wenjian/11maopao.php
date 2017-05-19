<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php
$a = array(9,  3,  5,  8,  2,  7);	//下标为0,1,2,3,4,5
/*
规律描述：
１，假设数组的数据有ｎ个。
２，要进行比较的“趟数”为ｎ－１；
３，每一趟要比较的数据个数都比前一趟少一个，第一趟要比较ｎ个（即比较ｎ－１次）
４，每一次比较，如果发现“左边数据”大于“右边数据”，就对这两者进行交换位置。
*/
echo "<br/>排序之前："; print_r($a);
//一顿排序。。。。。
$n = count($a);	//个数
for($i = 0; $i < $n - 1; ++$i){	//这就是n-1趟
	for($k = 0; $k < $n-$i-1; ++$k){//该趟要比较的次数
		//这里，也可以把$k当做下标来使用：
		if($a[$k] > $a[$k+1] ){
			$t = $a[$k];
			$a[$k] = $a[$k+1];
			$a[$k+1] = $t;
		}
	}
}
echo "<br/>排序之后："; print_r($a);
?>
</body>
</html>
