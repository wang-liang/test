<?php session_start();?>
<!--header-->
<div class="header">
	<div class="logo"><img src="./images/logo.png"></div>
	<div class="menu">
		<ul>
			<li><a href="/">首页</a></li>
			<li><a href="javascript:void(0)">免费视频</a></li>
			<li><a href="javascript:void(0)">直播课程</a></li>
			<li><a href="javascript:void(0)">社区</a></li>
			<li><a href="index.php" class="a2">论坛</a></li>
		</ul>
	</div>
	<div class="other">
		<?php 
		 	if(isset($_SESSION['username'])){
		 		echo $_SESSION['username'],"<a href='logout.php'>退出</a>";
		 	}else{
		 		echo "<a href=login.php>登录</a>
				<a>|</a>
				<a href=register.php>注册</a>";
		 	}
		 ?>
		
	</div>
	<div class="search">
		<input class="txt" type="text" value="请输入搜索内容">
		<a href="javascript:void(0)">贴子</a>
		<input class="sub" type="submit" value="">
	</div>
</div><!--//header-->
