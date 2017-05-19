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
$arr = array(1,2,33,44,50,66,77,90,91,94);
$search = 95;
$len = count($arr);
function binary_search($arr,$s,$begin,$end)
{
	if($s>$arr[$end] || $s<$arr[$begin])
	{
		return false;
	}
	//获取中间值下标
	$mid = floor(($begin+$end)/2);
	//获取中间值
	$mid_value = $arr[$mid];
	//判断要找的数是否在中间
	if($mid_value == $s)
	{
		return true;
	}
	//判断要找的数在左边还是右边
	else if($s<$mid_value)
	{
		//从左边查找，递归调用函数本身，直到找到
		$rec = binary_search($arr,$s,$begin,$mid-1);
	}
	else if($s>$mid_value)
	{
		//从右边查找
		$rec = binary_search($arr,$s,$mid+1,$end);
	}
	return $rec;
}
$v1 = binary_search($arr,$search,0,$len-1);
echo "结果为：";var_dump($v1);
?>

</body>
</html>
