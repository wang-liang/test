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
//获取$db显示所有数据库
if(!empty($_GET['db']))
{
	$db = $_GET['db'];
}
if(!empty($_GET['tab']))
{
	$tab = $_GET['tab'];
}
$link = mysql_connect("localhost","root","root");
mysql_query("set names utf8");
mysql_query("use $db");
$sql = "select * from $tab";
$rec = mysql_query($sql);
if($rec===false)
{
	echo "执行失败".mysql_error();
}
else
{
	echo "<table border=1>";
	//从结果集中获取数据列数
	$field_value = mysql_num_fields($rec);
	echo "<th>";
	for($i=0;$i<$field_value;++$i)
	{
		//获得结果集中的第i个字段名字
		$field_name = mysql_field_name($rec,$i);
		echo "<td>". $field_name ."</td>";
	}
	echo "</th>";
	//从结果集中取出每一行数据
	while($arr = mysql_fetch_array($rec))
	{
		echo "<tr>";
		//循环输出每一行数据的列数
		for($i=0;$i<$field_value;++$i)
		{
			//获得字段列的名字，用作数组下标
			$field_name = mysql_field_name($rec,$i);
			echo "<td>".$arr[$field_name]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>
