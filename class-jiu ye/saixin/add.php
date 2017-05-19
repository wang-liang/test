<?php
//连接MySQL服务器
require("conn.php");
//判断表单是否提交，表单提交如果没有指定action，则提交的数据传给它自己
if(isset($_POST["ac"]) && $_POST["ac"]=="add")
{
	//获取表单提交值
	$cat = $_POST["cat"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$source = $_POST["source"];
	$orderby = $_POST["orderby"];
	$keyword = $_POST["keywords"];
	$description = $_POST["description"];
	$content = $_POST["content"];
	$addate = time();
	//构建插入的SQL语句
	$sql = "insert into 007_news(cat,title,author,source,orderby,keywords,description,content,addate) values($cat,'$title','$author','$source',$orderby,'$keywords','$description','$content',$addate)";
	//执行SQL语句，向MySQL服务器发出请求
	if(mysql_query($sql))
	{
		$url = "manage.php";
		$message = urlencode("新闻添加成功！");
		header("location:success.php?url=$url&message=$message");
	}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>添加一条新闻</title>
<script charset="utf-8" src="js/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="js/editor/lang/zh_CN.js"></script>
<script type="text/javascript">

//加入在线编辑器
var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
		allowFileManager : true
	});
});

</script>
</head>

<body>
<form name="form1" method="post">
<table width="1000" border="1" bordercolor="#eee" rules="all" align="center" cellpadding="5">
	<tr>
		<th colspan="2" bgcolor="#ddd"><h2>新闻标题</h2></th>
	</tr>
	<tr>
		<td>新闻标题：</td>
		<td><input type="text" name="title" size="60" /></td>
	</tr>
	<tr>
		<td>新闻类别：</td>
		<td>
			<select name="cat">
				<option value="1">公司新闻</option>
				<option value="2">行业新闻</option>
				<option value="3">疾病预防</option>
				<option value="4">帮助中心</option>

			</select>
		</td>
	</tr>
	<tr>
		<td width="100" align="right">作者：</td>
		<td>
			<input type="text" name="author" value="admin" />
			来源：<input type="text" name="source" value="传智播客">
			排序：<input type="text" name="orderby" size="5" value="50" maxlength="2">
		</td>
	</tr>
	<tr>
		<td width="100" align="right">关键字：</td>
		<td>
			<input type="text" name="keywords" size="70" />
		</td>
	</tr>
		<tr>
		<td align="right">网页描述：</td>
		<td>
			<input type="text" name="description" size="70" />
		</td>
	</tr>
	<tr>
		<td align="right">新闻内容：</td>
		<td>
			<textarea name="content" style="width:100%;height:300px;visibility:hidden;"></textarea>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" value="添加新闻" />
			<input type="reset" value="重新填写" />
			<input type="hidden" name="ac" value="add" />
			<input type="button" value="返回" onclick="javascript:history.go(-1)"/>

		</td>
	</tr>
</table>
</form>
</body>
</html>
