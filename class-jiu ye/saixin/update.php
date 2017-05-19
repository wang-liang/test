
<?php
//链接MySQL服务器
require("conn.php");

//判断表单是否提交
if(isset($_POST["ac"]) && $_POST["ac"]=="edit")
{
	//获取表单提交值
	//下面的这个id值是通过表单提交来获取
	$id = $_POST["id"];
	$cat = $_POST["cat"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$source = $_POST["source"];
	$orderby = $_POST["orderby"];
	$keyword = $_POST["keywords"];
	$description = $_POST["description"];
	$content = $_POST["content"];
	//构建更新的SQL语句
	$sql="update 007_news set cat=$cat,title='$title',author='$author',source='$source',orderby=$orderby,keywords='$keywords',description='$description',content='$content' where id=$id";
	if(mysql_query($sql))
	{
		$url = "manage.php";
		$message = urlencode("新闻id={$id}修改成功！");
		header("location:success.php?url=$url&message=$message");
	}
}else
{
	//读取一条新闻内容
	//下面这个id值是通过地址栏获取的，当进入修改页面时，从地址栏获取获取id的值，同时将它传给表单
	$id = $_GET["id"];
	//构建查询的SQL语句
	$sql = "select * from 007_news where id=$id";
	$result = mysql_query($sql);
	//取出一条记录
	$row = mysql_fetch_assoc($result);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>修改新闻</title>
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
		<td><input type="text" name="title" size="60" value="<?php echo $row["title"]?>" /></td>
	</tr>
	<tr>
		<td>新闻类别：</td>
		<td>
			<select name="cat">
				<!--判断从新闻列表中读出的cat编号值是多少，那么当前的option即为默认选中项-->
				<option value="1" <?php if($row["cat"==1]){echo " selected='selected'";}?>>公司新闻</option>
				<option value="2" <?php if($row["cat"==2]){echo " selected='selected'";}?>>行业新闻</option>
				<option value="3" <?php if($row["cat"==3]){echo " selected='selected'";}?>>疾病预防</option>
				<option value="4" <?php if($row["cat"==4]){echo " selected='selected'";}?>>帮助中心</option>

			</select>
		</td>
	</tr>
	<tr>
		<td width="100" align="right">作者：</td>
		<td>
			<input type="text" name="author" value="<?php echo $row["author"]?>" />
			来源：<input type="text" name="source" value="<?php echo $row["source"]?>" />
			排序：<input type="text" name="orderby" size="5" value="<?php echo $row["orderby"]?>" maxlength="2" />
		</td>
	</tr>
	<tr>
		<td width="100" align="right">关键字：</td>
		<td>
			<input type="text" name="keywords" size="70" value="<?php echo $row["keywords"]?>" />
		</td>
	</tr>
		<tr>
		<td align="right">网页描述：</td>
		<td>
			<input type="text" name="description" size="70" value="<?php echo $row["description"]?>" />
		</td>
	</tr>
	<tr>
		<td align="right">新闻内容：</td>
		<td>
			<textarea name="content" style="width:100%;height:300px;visibility:hidden;"><?php echo $row["content"]?></textarea>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" value="修改新闻" />
			<input type="hidden" name="ac" value="edit" />
			<!--将id的值存到隐藏域中，随表单一起提交给它自己-->
			<input type="hidden" name="id" value="<?php echo $id?>" />
			<input type="button" value="返回" onclick="javascript:history.go(-1)"/>

		</td>
	</tr>
</table>
</form>

</body>
</html>
