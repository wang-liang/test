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
$link = @mysql_connect("localhost","root","root");
if($link==true)
{
	echo "链接成功";
}
else
{
	echo "链接失败".mysql_error();
}
mysql_query("set names utf8");
mysql_query("use shop");
$sql = "select * from product";
$result = mysql_query($sql);
if($result===false)
{
	echo "执行失败，请参考：".mysql_error;
}
else
{
	echo "执行成功！数据如下：";
	echo "<table border='1'>";
	$field_count = mysql_num_fields($result);//获得列数
	echo "<tr>";
	//循环列数
	for($i = 0;$i<$field_count;++$i)
	{
		//从结果集中获得每一列的字段名
		$field_name = mysql_field_name($result,$i);
		//输出字段名
		echo "<td>" . $field_name . "</td>";
	}
	echo "</tr>";
	//循环行并从结果集中获得每一条记录，成为新的数组
	while($rec = mysql_fetch_array($result))
	{
		echo "<tr>";
		//循环列将数组中的每一个字段内容输入到表格中
		for($i=0;$i<$field_count;$i++)
		{
			//从结果集中获得字段内容
			$field_name = mysql_field_name($result,$i);
			//输出字段内容,即每一行的每一列中的字段
			echo "<td>" . $rec[$field_name] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>
