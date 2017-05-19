<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>发布新贴</title>
<link href='./images/public.css' rel='stylesheet' type='text/css'>
<!--在线编辑器-->
<script charset="utf-8" src="js/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="js/editor/lang/zh_CN.js"></script>
<script>
var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
		allowFileManager : true
	});
});
</script>

</head>
<body>
<?php
//包含头部文件
include_once('./header.php');
?>
<!--发布新贴-->
<div class="blank10"></div>
<div class="register">
	<div class="title">
		<span class="spanL"><a href="list.php">主题列表</a></span>
		<span class="spanR"><a href="javascript:void(0)" onclick="history.go(-1)">返回</a></span>
	</div>
	<form name="form1" method="post" action="send_save.php">
	<table width="800" border="0" align="center">
		<tr>
			<th width="100" align="right"><span class="rq">*</span> 贴子标题：</th>
			<td><input type="text" name="title"  size="100" class="px"></td>
		</tr>
		<tr>
			<th align="right" valign="top"><span class="rq">*</span> 贴子内容：</th>
			<td><textarea name='content' style="width:100%;height:180px;"></textarea></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td>
				<button class="pn pnc"  type="submit" value="submit" name="submit"><strong>发布</strong></button>
				<button class="pn pnc"  type="button" onclick="history.go(-1)"><strong>返回</strong></button>
			</td>
		</tr>
	</table>
	</form>
</div><!--//发布新贴-->
<?php
//包含页脚文件
include_once('./footer.php');
?>