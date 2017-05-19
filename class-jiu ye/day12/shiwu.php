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
mysql_query("use php39");

$sql = "start transaction;";
mysql_query($sql);

$sql1 = "insert into tab_int(f1,f2,f3)values(15,25,35);";
$result1 = mysql_query($sql1);
$sql2 = "insert into tab_int(f1,f2,f3)values(16,20,20);";
$result2 = mysql_query($sql2);// 这一句会出错，因为f2是tinyint类型，266超出范围


if($result1 && $result2)
{
	mysql_query("commit");
	echo "事务执行成功！所有任务都已完成";
}
else{
	mysql_query("rollback");
	echo "事务执行失败！数据没有被修改";
}


?>
</body>
</html>
