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
$link = mysql_connect("localhost","root","root");
mysql_query("set names utf8");
mysql_query("use $db");
$sql = "show tables";
$result = mysql_query($sql);
while($arr = mysql_fetch_array($result))
{
	echo "<br />" . $arr[0];
	echo "<a href='table_struct.php?db=$db&tab=$arr[0]'>查看结构</a>&nbsp;";
	echo "<a href='table_data.php?db=$db&tab=$arr[0]'>查看数据</a>";
}
?>
</body>
</html>
