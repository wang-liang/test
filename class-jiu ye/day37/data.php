<?php
header("content-type:text/html;charset=utf-8");
//传统方式实现分页效果
$link = mysql_connect('localhost','root','root');
mysql_select_db('shop0710',$link);
mysql_query('set names utf8');

//实现数据分页
include("./page.class.php");

//获得商品总条数
$sql = "select * from sw_goods order by goods_id desc";

$qry = mysql_query($sql);

$total = mysql_num_rows($qry);//总条数
$per = 7;

$page_obj = new Page($total,$per);

$sql3 = "select goods_id,goods_name,goods_price,goods_number,goods_weight from sw_goods ".$page_obj->limit;

$qry3 = mysql_query($sql3);

$pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
echo <<<eof
<style type="text/css">
	table{width:700px;border:1px solid black;margin:auto;borser-collapse:collapse;}
</style>
<table>
	<tr style="font-weight:bold;"><td>序号</td><td>名称</td><td>价格</td><td>数量</td><td>重量</td></tr>
eof;
while($rst = mysql_fetch_assoc($qry3)){
	echo "<tr>";
	echo "<td>".$rst['goods_id']."</td>";
	echo "<td>".$rst['goods_name']."</td>";
	echo "<td>".$rst['goods_price']."</td>";
	echo "<td>".$rst['goods_number']."</td>";
	echo "<td>".$rst['goods_weight']."</td>";
	echo "</tr>";
}
echo "<tr><td colspan='5'>$pagelist</td></tr>";
echo "</table>";