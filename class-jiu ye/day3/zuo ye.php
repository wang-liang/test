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

/*
使用任何形式定义一个数组，要求使用3种形式输出该数组的所有键和值。
提示：foreach, print_r, var_dump
*/
$arr = array("REMOTE_ADDR","SERVER_NAME","SERVER_ADDR","DOCUMENT_ROOT","PHP_SELF");
foreach($arr as $key => $value)
{
	echo $key."=>",$value."<br/>";
}
for($i=0;$i<count($arr);$i++)
{
	echo "<pre>";
	print_r($i."=>".$arr[$i]);
	echo "</pre>";
}
for($i=0;$i<count($arr);$i++)
{
	echo "<pre>";
	var_dump($i."=>".$arr[$i]);
	echo "</pre>";
}
echo "<br />";
/*输出ASCII码的所有可见字符（编码为32-126的字符）
提示：chr( n )可以获得编码为n的字符。*/
for($code=32;$code<=126;$code++)
{
	echo "<pre>";
	var_dump(chr($code));
	echo "</pre>";
}
	
?>
</body>
</html>
