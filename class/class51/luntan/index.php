<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>论坛首页</title>
<link href='./images/public.css' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
//包含头部文件
include_once('./header.php');
?>
<!--crumbs-->
<div class="blank10"></div>
<div class="crumbs">
	<div class="nav">
		<span class="span1"></span>
		<span class="span2"><img src="./images/pt_item.png"></span>
		<a href="./index.php">论坛</a>
	</div>
	<div class="info">
		今日: <em>54</em><span class="pipe">|</span>昨日: <em>25</em><span class="pipe">|</span>帖子: <em>9601</em><span class="pipe">|</span>会员: <em>16986</em><span class="pipe">|</span><em><a href="javascript:void(0)" class="xi2">
			<?php 
				if(isset($_SESSION['username'])){
					echo "欢迎新会员: ".$_SESSION['username'];
				}else{
					echo "游客";
				}
			 ?>
		</a></em>
	</div>
</div><!--//crumbs-->
<!--box-->
<div class="box">
<!--左边栏-->
<div class="left">
	<!--幻灯片-->
	<div class="ppt">
		<div class="div1">
			<img width="540" height="280" src="images/ppt1.jpg">
		</div>
		<div class="div2">
			<div class="divTop">
				<h4>说一句东北腔的台湾话我听听！</h4>
				<p>说一句东北腔的台湾话我听听！[<a href="javascript:void(0)">查看</a>]</p>
			</div>
			<div class="divBottom">
				<ul>
					<li><a href="javascript:void(0)">说一句东北腔的台湾话我听听！</a></li>
					<li><a href="javascript:void(0)">点、线、面的运用，设计的骨骼！</a></li>
					<li><a href="javascript:void(0)">你旁边坐了个吃货是怎样的一种体验？</a></li>
					<li><a href="javascript:void(0)">PSCC版本消除图片噪点的小技巧</a></li>
					<li><a href="javascript:void(0)">问问你，这3个icon你怕不怕？</a></li>
					<li><a href="javascript:void(0)">作为设计师，如何正确高效的与PM沟通</a></li>
					<li><a href="javascript:void(0)">让你的简历多点卖点！</a></li>
					<li><a href="javascript:void(0)">PS小技巧大作用，让你事半功倍！</a></li>
				</ul>
			</div>
		</div>
		<div class="blank10"></div>
	</div><!--//幻灯片-->
	<!--今日头条-->
	<div class="blank10"></div>
	<div class="board">
		<div class="title">今日头条</div>
		<div class="content">
			<img src="images/common_84_icon.png">
			<span>
				<h4>热门话题(3)</h4>
				<p>时事热点、明星八卦、北漂心声、工作吐槽......想聊的你，快来参与吧！</p>
				<p>主题: 161, 帖数: 1665</p>
			</span>
		</div>
		<div class="content">
			<img src="images/common_46_icon.png">
			<span>
				<h4>精彩活动</h4>
				<p>万众参与，无门槛限制，多样活动，精彩多多，福利多多！</p>
				<p>主题: 73, 帖数: 1820</p>
			</span>
		</div>
		<div class="blank"></div>
	</div><!--//今日头条-->
	<div class="blank10"></div>
	<!--讨论专区-->
	<div class="board">
		<div class="title">讨论专区</div>
		<div class="content">
			<img src="images/common_48_icon.png">
			<span>
				<h4>行业交流(2)</h4>
				<p>技术大牛与菜鸟无障碍沟通，IT行业及其相关产业最新资讯的分享之地，欢迎交流分享!</p>
				<p>主题: 191, 帖数: 1865</p>
			</span>
		</div>
		<div class="content">
			<img src="images/common_122_icon.png">
			<span>
				<h4><a style="color:blue;" href="list.php">大家说说说(1)</a></h4>
				<p>不怕你吐槽，就怕你不吐！畅所欲言，天马星空，一起来聊聊吧！</p>
				<p>主题: 73, 帖数: 820</p>
			</span>
		</div>
		<div class="blank"></div>
	</div><!--//讨论专区-->
	<div class="blank10"></div>
	<!--精品资源-->
	<div class="board">
		<div class="title">精品资源</div>
		<div class="content">
			<img src="images/common_47_icon.png">
			<span>
				<h4>视频教程(2)</h4>
				<p>传智云课堂的免费视频教程集锦，走过路过不可错过！</p>
				<p>主题: 191, 帖数: 1865</p>
			</span>
		</div>
		<div class="content">
			<img src="images/common_45_icon.png">
			<span>
				<h4>图文教程(1)</h4>
				<p>传智云课堂的免费图文教程集锦，走过路过不可错过！</p>
				<p>主题: 73, 帖数: 820</p>
			</span>
		</div>
		<div class="content">
			<img src="images/common_119_icon.png">
			<span>
				<h4>热心素材(2)</h4>
				<p>本板块为最新素材的分享之地，欢迎分享！</p>
				<p>主题: 161, 帖数: 1815</p>
			</span>
		</div>
		<div class="content">
			<img src="images/common_120_icon.png">
			<span>
				<h4>工具下载(1)</h4>
				<p>不本板块为常用网页平面UI设计软件的分享之地，欢迎分享！！</p>
				<p>主题: 43, 帖数: 850</p>
			</span>
		</div>
		<div class="blank"></div>
	</div><!--//精品资源-->
	<div class="blank10"></div>
	<!--每日作业-->
	<div class="board">
		<div class="title">每日作业</div>
		<div class="content">
			<img src="images/common_98_icon.png">
			<span>
				<h4>平面设计(2)</h4>
				<p>传智云课堂的免费视频教程集锦，走过路过不可错过！</p>
				<p>主题: 191, 帖数: 1865</p>
			</span>
		</div>
		<div class="content">
			<img src="images/common_99_icon.png">
			<span>
				<h4>网页设计(1)</h4>
				<p>传智云课堂的免费图文教程集锦，走过路过不可错过！</p>
				<p>主题: 73, 帖数: 820</p>
			</span>
		</div>
		<div class="blank"></div>
	</div><!--//精品资源-->
</div><!--//左边栏-->
<!--右边栏-->
<div class="right">
	<img src="images/right01.jpg" width="270">
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
</div><!--//box-->
<?php
//包含页脚文件
include_once('./footer.php');
?>