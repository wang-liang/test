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
$arr = array(2,3,43,4,21,24,15,13);
$len = count($arr);
$max = $arr[0];
$min = $arr[0];
$pos2 = 0;
for($i=0;$i<$len;$i++)
{
	if($arr[$i]>$max)
	{
		$max = $arr[$i];
		$pos = $i;
	}
	if($arr[$i]<$min)
	{
		$min = $arr[$i];
		$pos2 = $i;
	}
}
$t = $arr[$pos];
$arr[$pos] = $arr[$pos2];
$arr[$pos2] = $t;
print_r($arr);

?>
</body>
</html>
