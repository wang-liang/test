<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>贴子内容页</title>
<link href='./images/public.css' rel='stylesheet' type='text/css'>
<!--
添加在线编辑器
-->
</head>

<body>
<?php
//包含头部文件
include_once('./header.php');
?>
<!--box-->
<div class="blank10"></div>
<div class="box">
<!--左边栏-->
<div class="left">
	<!--主题内容-->
	<div class="detail">
		<div class="title">
			<a href="./index.php">论坛</a><img src="./images/pt_item.png">
			<a href='./list.php'>讨论专区</a><img src="./images/pt_item.png">
			<a href='./list.php'>大家说说说</a><img src="./images/pt_item.png">
			查看内容
		</div>
		<div class="content">
			<div class="thread">
				<h4>说一句东北腔的台湾话我听听！</h4>
				<div class='user'>
					<img src="./images/noavatar_small.gif">
					<span><b>zhangsan</b>&nbsp;&nbsp;发表于2016-04-14</span>
				</div>
				<div class="content">
					<p>答：据了解，这个案件现在正在依法侦办过程中，中国有关公安机关已经将相关情况通报给了英国驻广州总领事馆。在这儿我没有进一步的具体细节可以提供。</p>
					<p>问：俄罗斯和中国共同向联合国安理会提出了一项反对叙利亚境内使用化学武器的决议草案，你对此有何评论？</p>
					<p>答：北京时间4月14日，俄罗斯和中国共同向联合国安理会提交了关于叙利亚化学武器问题的决议草案。在化武问题上，中方的立场是一贯的、明确 的，我们坚决反对任何人、出于任何目的、在任何情况下使用化学武器。这份决议草案对叙利亚境内恐怖组织使用化武的意图表示关切，并且要求会员国，特别是叙 利亚周边国家，向安理会报告有关情况。我们呼吁有关各方加强协调，形成合力，共同反对和惩处任何方面使用化武的行为，我们也希望安理会各方都能够支持俄、 中这个决议草案。</p>
				</div>
			</div><!--//thread-content-->
			<ul>
				<li>
					<img src="./images/15_avatar_small.jpg">
					<p class="user">楼主：<b>wangba</b> &nbsp;&nbsp;2016-04-14 </p>
					<div class="blank"></div>
					<div class="con">北京时间4月14日，俄罗斯和中国共同向联合国安理会提交了关于叙利亚化学武器问题的决议草案。在化武问题上，中方的立场是一贯的、明确 的，我们坚决反对任何人、出于任何目的、在任何情况下使用化学武器。这份决议草案对叙利亚境内恐怖组织使用化武的意图表示关切，并且要求会员国，特别是叙 利亚周边国家，向安理会报告有关情况。我们呼吁有关各方加强协调，形成合力，共同反对和惩处任何方面使用化武的行为，我们也希望安理会各方都能够支持俄、 中这个决议草案。</div>
				</li>
				<li>
					<img src="./images/noavatar_small.GIF">
					<p class="user">楼主：<b>layer</b> &nbsp;&nbsp;2016-04-14 </p>
					<div class="blank"></div>
					<div class="con">北京时间4月14日，俄罗斯和中国共同向联合国安理会提交了关于叙利亚化学武器问题的决议草案。在化武问题上，中方的立场是一贯的、明确 的，我们坚决反对任何人、出于任何目的、在任何情况下使用化学武器。这份决议草案对叙利亚境内恐怖组织使用化武的意图表示关切，并且要求会员国，特别是叙 利亚周边国家，向安理会报告有关情况。我们呼吁有关各方加强协调，形成合力，共同反对和惩处任何方面使用化武的行为，我们也希望安理会各方都能够支持俄、 中这个决议草案。</div>
				</li>
			</ul>
			<div class="replay">
			<!--//reply begin-->
				<?php 
					if(isset($_SESSION['username'])){
				 ?>
				<form name="form1" method="post" action="reply_save.php">
				<table width="100%" border="0" align="center">
					<tr>
						<td><textarea name='content' style="width:100%;height:180px;"></textarea></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="发表回复"></input>
						</td>
					</tr>
				</table>
				</form>
				<?php 
					}
				 ?>

			</div>
		</div><!--//content-->
		<div class="blank"></div>
	</div><!--//主题内容-->
	<div class="blank10"></div>
</div><!--//左边栏-->
<!--右边栏-->
<div class="right">
	<?php 
		if(isset($_SESSION['username'])){
			echo "<img src=images/thread_post.png onclick=javascript:location.href='send.php' width=270>";
		}else{
			echo "<img src=images/thread_post.png onclick=javascript:location.href='login.php' width=270>";
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