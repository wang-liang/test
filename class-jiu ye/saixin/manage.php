<?php
//连接MySQL数据库
require("conn.php");
//从007_news数据表中查找所有的数据
$sql = "select * from 007_news";
//mysql_query()如果作用于select语句，成功返回结果集，失败返回false
//mysql_query()如果作用于insert、update、delete时，成功返回true，失败返回false
//执行SQL语句
$result = mysql_query($sql);

//每页显示的条数
$pagesize = 10; 
//总记录数
$records = mysql_num_rows($result);
//总页数
$pages = ceil($records/$pagesize);
//计算开始行号
if(isset($_GET["page"]))
{
	//$page为当前页
	$page = $_GET["page"];
	//开始行号
	$starttrow = ($page-1)*$pagesize;
}else
{
	$page = 1;
	$startrow = 0;
}
//分页的SQL语句
$sql = "select * from 007_news order by id desc limit $startrow,$pagesize";
$result = mysql_query($sql);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>新闻列表</title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css"></style>
<script type="text/javascript">

//单击删除按钮时，删除指定id的记录
function delform(id)
{
	//当执行删除时，弹出提示框
	if(window.confirm("你确定要删除吗？"))
	{
		//跳转到删除页面，同时将id的值传给地址栏
		location.href = "delete.php?id="+id;
	}
}

</script>
</head>

<body>
<!--构建表格，显示新闻管理页面（可以执行删除、修改、打开新闻内容等操作）-->
<table border=1 width=1000 rules=all align=center cellpadding=5>
	<tr>
		<td colspan="7"><a href="add.php" onclick="javascript:location.href='add.php'">添加一条新闻</a></td>
	</tr>
	<tr bgColor="#fcfcfc">
		<th>编号</th>
		<th>新闻标题</th>
		<th>作者</th>
		<th>来源</th>
		<th>点击率</th>
		<th>发布时间</th>
		<th>操作选项</th>
	</tr>
	<?php
	//从结果集中取出一条记录存到$row数组中
	while($row =mysql_fetch_assoc($result)){
	?>
	<tr align=center>
		<td><?php echo $row["id"]?></td>
		<!--当单击标题内容的时候，通过<a>链接跳转到content.php内容页面，并将id的值传给地址栏，同时在新窗口打开-->
		<td align="left"><a target="_blank" href="content.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></td>
		<td><?php echo $row["author"]?></td>
		<td><?php echo $row["source"]?></td>
		<td><?php echo $row["hits"]?></td>
		<td><?php echo $row["hits"]?></td>
		<td><?php echo date("Y-m-d H:i",$row["addate"])?></td>
		<td >
			<a href="update.php?id=<?php echo $row["id"]?>">修改</a>
			<a href="javascript:void(0)" onclick="delform(<?php echo $row["id"]?>)">删除</a>
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan="7" align="center">
			<?php
				//循环输出所有页码
				for($i=1;$i<=$pages;$i++)
				{
					//判断是否是当前页
					if($i==$page)
					{
						echo "<span class='current'>$i</span>";
					}else
					{
						echo "<a class='a2' href='manage.php?page=$i'>$i</a> ";
					}
				}
			?>
		</td>
	</tr>
</table>
</body>
</html>
