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
//写一个页面server.php，并输出至少5个$_SERVER内的元素信息，并说明是什么含义，页面表现形式如下：

$arr1 = array('PHP_SELF','DOCUMENT_ROOT', 'SERVER_NAME', 'REMOTE_ADDR', 'SCRIPT_FILENAME');
$arr2 = array('当前网页路径','站点根目录', '服务器名', '客户端IP', '网页物理路径');
echo "<table border=1>";
foreach($arr1 as $key =>$value){
	echo "<tr>";
		echo "<td>$value</td>";
		echo "<td>" . "$" . "_SERVER['$value']</td>";
		echo "<td>" . $_SERVER[$value] ."</td>";
		echo "<td>".$arr2[$key]."</td>";
	echo "</tr>";
}
echo "</table>";

?>
</body>
</html>