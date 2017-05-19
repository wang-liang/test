<?php
require("conn.php");
//通过GET方式获取地址栏传递的id值
$id = $_GET["id"];

//构建更新的SQL语句
$sql="update 007_news set hits=hits+1 where id=$id";
//向SQL服务器发出执行请求，更新点击率(返回值为true和false)，不需要判断
mysql_query($sql);

//构建查询的SQL语句
$sql = "select * from 007_news where id=$id";

//执行SQL语句,返回一个结果集
$result = mysql_query($sql);

//取出一条记录，在表格中输出
$row = mysql_fetch_assoc($result);
?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<!--在新闻之前将标题读出来，从$row中读取标题-->
<title><?php echo $row["title"]?></title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css">
p{
	text-indent:32px;
}
</style>
<script type="text/javascript">



</script>
</head>

<body>
<!--构建表格，显示从数据库中读取的新闻的具体内容-->
<table width=1000 bordercolor=#eee rules=all align=center cellpadding=5>
	<tr>
		<th><h1><?php echo $row["title"]?></h1><th>
	</tr>
	<tr align=center>
		<td>
			作者：<?php echo $row["aythor"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			来源：<?php echo $row["source"]?>&nbsp;&nbsp;&nbsp;&nbsp;
			点击率：<?php echo $row["hits"]?>&nbsp;&nbsp;&nbsp;&nbsp;
			发布时间：<?php echo date("Y-m-d H:i",$row["addate"])?>&nbsp;&nbsp;
			<input type="button" value="关闭窗口" onclick="javascript:window.close()">
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $row["content"]?>
		</td>
	</tr>
</table>
</body>
</html>
