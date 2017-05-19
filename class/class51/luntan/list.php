<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>主题页</title>
<link href='./images/public.css' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
//包含头部文件
//include_once('./header.php');
//require './conn.php';
?>
<!--box-->
<div class="blank10"></div>
<div class="box">
<!--左边栏-->
<div class="left">
	<!--主题列表-->
	<div class="list">
		<div class="title">
			<a href="./index.php">论坛</a><img src="./images/pt_item.png">
			<a href='./list.php'>讨论专区</a><img src="./images/pt_item.png">
			大家说说说
		</div>
		<div class="content">
			<ul>
					<?php
					//列表页的显示,涉及到两张表,user, thread, 从表中我们知道, user表中的id,和thread表中的uid是一致的. 
					//构建SQL语句
					$sql = "select a.name,a.face,b.id,b.title,b.addate from user as a inner join thread as b  on a.id = b.uid order by addate desc";
					$result = mysql_query($sql);
					while ($row = mysql_fetch_assoc($result)) {
					 ?>
						<li>
							<img src="<?php echo $row['face']?>">
							<h4><a href="content.php?id=<?php echo $row['id'] ?>"><?php echo $row['title']?></a></h4>
							<p>楼主：<?php echo $row['name']?> &nbsp;&nbsp;发布时间: <?php echo date('Y-m-d H:i:s',$row['addate'])?> </p>
							<div class="blank"></div>
						</li>

				<?php } ?>
			</ul>
			<div class="pagelist">
				<span class="current">1</span>
				<a href="javascript:void(0)">2</a>
				<a href="javascript:void(0)">3</a>
				<a href="javascript:void(0)">4</a>
				<a href="javascript:void(0)">5</a>
				<a href="javascript:void(0)">6</a>
				<a href="javascript:void(0)">7</a>
				<a href="javascript:void(0)">8</a>
				<a href="javascript:void(0)">9</a>
				<a href="javascript:void(0)">10</a>
			</div>
		</div><!--//content-->
		<div class="blank"></div>
	</div><!--//主题列表-->
	<div class="blank10"></div>
</div><!--//左边栏-->
<!--右边栏-->
<div class="right">
<?php 
		if(isset($_SESSION['username'])){
			echo "<img src=images/thread_post.png onclick=javascript:location.href='send.php' width=270>";
		}else{
			echo "<img src=images/thread_post.png  width=270 onclick=\"if( confirm('123')) location.href='login.php'\">";
		}
 ?>
	
	<!--最新主题-->
	<div class="recommend">
		<h4>最新主题</h4>
		<ul>
			<li><a href="javascript:void(0)">PS基础班0406期第六天作业贴</a></li>
			<li><a href="javascript:void(0)">一个完整的UI设计流程是怎样的？</a></li>
			<li><a href="javascript:void(0)">为什么你单身，你真的考虑过吗？</a></li>
			<li><a href="javascript:void(0)">今天你的朋友圈有被点赞吗？</a></li>
			<li><a href="javascript:void(0)">你或许知道或许不知道的hello world</a></li>
			<li><a href="javascript:void(0)">2015年交互设计趋势回顾</a></li>
			<li><a href="javascript:void(0)">PS基础之自然饱和度和色相饱和度</a></li>
			<li><a href="javascript:void(0)">德国前副总理成都过生吃川菜(图)</a></li>
			<li><a href="javascript:void(0)">西藏警方否认拘留“圣湖拍裸照”摄影师</a></li>
		</ul>
	</div><!--//最新主题-->
	<!--推荐阅读-->
	<div class="recommend">
		<h4>推荐阅读</h4>
		<ul>
			<li><a href="javascript:void(0)">PS基础班0406期第六天作业贴</a></li>
			<li><a href="javascript:void(0)">一个完整的UI设计流程是怎样的？</a></li>
			<li><a href="javascript:void(0)">为什么你单身，你真的考虑过吗？</a></li>
			<li><a href="javascript:void(0)">今天你的朋友圈有被点赞吗？</a></li>
			<li><a href="javascript:void(0)">你或许知道或许不知道的hello world</a></li>
			<li><a href="javascript:void(0)">2015年交互设计趋势回顾</a></li>
			<li><a href="javascript:void(0)">PS基础之自然饱和度和色相饱和度</a></li>
			<li><a href="javascript:void(0)">德国前副总理成都过生吃川菜(图)</a></li>
			<li><a href="javascript:void(0)">西藏警方否认拘留“圣湖拍裸照”摄影师</a></li>
		</ul>
	</div><!--//推荐阅读-->
	<img src="images/right02.jpg" width="270">
	<img src="images/right03.jpg" width="270">
	<img src="images/right04.jpg" width="270">
</div><!--//右边栏-->
<div class="blank10"></div>
</div><!--//box--><?php
//包含页脚文件
include_once('./footer.php');
?>