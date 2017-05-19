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
$link = mysql_connect("localhost","root","root");
mysql_query("set names utf8");
$rec = mysql_query("show databases");
while($arr = mysql_fetch_array($rec))
{
	//从结果集中获取字段Database的数据
	echo "<br />" . $arr[0];  //也可以写$result['Database'];
	echo "<a href='tables.php?db={$arr[0]}'>查看表</a>";
}

?>
</body>
</html>
