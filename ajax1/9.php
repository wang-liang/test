<?php

header("Content-type:text/html;charset=utf-8");
/*
 * PHP数据分页
 */
//数据库连接
try {
	$pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "", array(
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	));
} catch (PDOException $ex) {
	echo $ex->getMessage();
}

//定义每页显示的记录数
$size = 1;
//查询总记录数
$rec = $pdo->query("SELECT COUNT(*) AS uu FROM goods")->fetch();
$count = $rec["uu"];
//计算总页数
$maxp = ceil($count/$size);
//获取当前页码值 ?p=10000
$pid = isset($_POST['p']) ? intval($_POST['p']) : 1;
//验证页码值是否合法
if ($pid < 0) {
	$pid = 1;
} else if ($pid > $maxp) {
	$pid = $maxp;
}
//计算分页数据的起始位置 0-9 10-19 20-29
$start = ($pid - 1)*$size;
$sql = "SELECT * FROM goods LIMIT {$start}, {$size}";
//查询返回结果
$rows = $pdo->query($sql)->fetchAll();
//将数组组装到table表格中返回
$table  = "<table class='bordered w1000px'>";
	$table.= "<tr><th>#</th><th>商品名称</th><th>图片</th><th>价格</th><th>操作</th></tr>";
	foreach ($rows as $row) {
		$table.= "<tr>";
			$table.= "<td>{$row['gid']}</td>";
			$table.= "<td>{$row['gname']}</td>";
			$table.= "<td><img src='{$row['src']}'width=200 /></td>";
			$table.= "<td>{$row['price']}</td>";
			$table.= "<td><a href=''>编辑</a><a href=''>删除</a></td>";
		$table.= "</tr>";
	}
$table.= "</table>";

//组装分页跳转连接
$page = "<p class='w1000px'><a href='javascript:display(1);'>首页</a> ";
$page .= "<a href='javascript:display(".($pid - 1).")'>上一页</a> ";
$page .= "<a href='javascript:display(".($pid + 1).")'>下一页</a> ";
$page .= "<a href='javascript:display(".($maxp).")'>末页</a></p>";

echo "<link type='text/css' rel='stylesheet' href='common.css' />";
echo $table;
echo $page;
