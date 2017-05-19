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
echo "<table>";
while($rows=mysql_fetch_assoc($result)){
	echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['title'] . "</td>";
		echo "<td>" . $row['author'] . "<td>";
		echo "<td>" . $row['source'] . "</td>";
		echo "<td>" . $row['hits'] . "</td>";
		echo "<td>" . date('Y-m-d H:i',$row['addate']) . "</td>";
		echo "<td>";
		echo "<a href='edit.php'>修改</a>";
		echo "<a href='javascript:void(0)'>删除</a>";
		echo "</td>";
	echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
