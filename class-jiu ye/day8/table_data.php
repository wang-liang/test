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
if(!empty($_GET['db']))
{
	$db = $_GET['db'];
}
if(!empty($_GET['tab']))
{
	$tab = $_GET['tab'];
}
$link = mysql_connect("localhost","root","root");
if($link==true)
{
	echo "连接成功";
}
else
{
	echo "连接失败" . mysql_error();
}
mysql_query("set names utf8");
mysql_query("use $db");
$rec = mysql_query('select * from $tab');
if($rec===false)
{
	echo "执行失败，请参考：" . mysql_error();
}
else
{
	echo "<table border=1>";
	echo "<tr>";
		$field_count = mysql_num_fields($rec); 

	for($i=0;$i<$field_count;++$i)
	{
		$field_name = mysql_field_name($rec,$i);
		echo "<td>" . $field_name . "</td>";
	}
	echo "</tr>";
	//循环行并从结果集中获得每一条记录，成为新的数组
	while($arr = mysql_fetch_array($rec))
	{
		echo "<tr>";
		for($i=0;$i<$field_count;$i++)
		{
			$field_name = mysql_field_name($rec,$i);
			echo "<td>" . $arr[$field_name] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>
