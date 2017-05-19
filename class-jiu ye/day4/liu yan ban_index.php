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
//连接MySQL数据库
mysql_connect("localhost","root","root");
//设定字符集
mysql_query("set names utf8");
//使用数据库
mysql_query("use liuyanban");

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["C"];
$sql = "insert into (xingming,biaoti, fabushijian, neirong) values('$a', '$b', now(), '$d'); 

$result = mysql_query($sql);

if($result==true)
{
	echo "留言成功！";
	header("location:index.php?url=$url&message=$message)
}

else
{
	$str = mysql_error();
	echo "留言失败，原因是：".$str;
}
?>
</body>
</html>
