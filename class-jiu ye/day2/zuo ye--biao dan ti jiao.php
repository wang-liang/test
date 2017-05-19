<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>网页标题</title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css"></style>
<script type="text/javascript">



</script>
</head>

<body>
<?php
$arr = array("REMOTE_ADDR","SERVER_NAME","SERVER_ADDR","DOCUMENT_ROOT","PHP_SELF");
$arr1 = array("获取访问者的ip地址","获取服务器的名字","获取服务器所在的ip地址","获取站点的真实物理地址","获取当前网页地址（不含域名部分）");
?>
<table border="1" rules="all" width="800" align="center">
	<tr>
		<td>元素名称</td>
		<td>使用形式</td> 
		<td>结果</td>
		<td>含义</td>
	</tr>
	<?php for($i=0;$i<5;$i++){?>
	<tr>
		<td><?php echo $arr[$i];?></td>
		<td><?php echo "\$_SERVER[$arr[$i]]";?></td>
		<td><?php echo $_SERVER[$arr[$i]];?></td>
		<td><?php echo $arr1[$i];?></td>
	</tr>
	<?php }?>
</table>
<br />
<?php
/*
写一个表单，用来填写“用户信息”，要求出现所有的表单元素类型：
文本框，密码框，单选，复选，下拉，多行文本域，隐藏域
提交后显示用户所填写的所有数据。
提示：其中复选框的名字需要这样来取：<input  type=”checkbox”  name=”aihao[]”  />
*/
if(!empty($_POST))
{
	$username = $_POST["user"];
	echo "用户名：".$username."<br />";
	$password = $_POST["pwd"];
	echo "密码:".$password."<br />";
	$sex = $_POST["sex"];
	echo "性别：".$sex."<br />";
	$like = $_POST["like"];
	for($i=0;$i<count($like);$i++)
	{
		echo $like[$i].",";
	}
	$shengfeng = $_POST["shengfeng"];
	echo "<br />省份：".$shengfeng."<br />";
	$info = $_POST["info"];
	echo "个人简介：".$info."<br />";
	$ac = $_POST["ac"];
	echo "隐藏域：".$ac."<br />";
}
else
{
	$username = "";
	$password = "";
	$sex = "男";
	$like = "";
	$shengfeng = "";
	$info = "";
}


?>

<form method="post" name="form1" >
<table align="center" rules="all" border="1" width="400">
	<tr>
		<td colspan="2">用户信息</td>
	</tr>
	<tr>
		<td>用户名：</td>
		<td>
			<input type="text" name="user" value="<?php echo $username;?>">
		</td>
	</tr>
	<tr>
		<td>密码：</td>
		<td>
			<input type="password" name="pwd" value="<?php echo $password;?>">
		</td>
	</tr>
	<tr>
		<td>性别：</td>
		<td>
			<input type="radio" name="sex" value="男" <?php if($sex=="男"){echo 'checked="checked"';}?>>男
			<input type="radio" name="sex" value="女" <?php if($sex=="女"){echo 'checked="checked"';}?>>女
		</td>
	</tr>
	<tr>
		<td>爱好：</td>
		<td>
			<input type="checkbox" name="like[]" value="唱歌" >唱歌
			<input type="checkbox" name="like[]" value="看书" >看书
			<input type="checkbox" name="like[]" value="旅行" >旅行
		</td>
		
	</tr>
	<tr>
		<td>籍贯：</td>
		<td>
			<select name="shengfeng">
				<option  value="北京" <?php if($shengfeng=="北京"){echo 'selected="selected"';}?>>北京</option>
				<option  value="天津" <?php if($shengfeng=="天津"){echo 'selected="selected"';}?>>天津</option>
				<option  value="河北" <?php if($shengfeng=="河北"){echo 'selected="selected"';}?>>河北</option>
				<option  value="上海" <?php if($shengfeng=="上海"){echo 'selected="selected"';}?>>上海</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>个人简介：</td>
		<td>
			<textarea name="info" rows="5" cols="50" value="<?php echo $info;?>"></textarea>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" value="提交按钮">
			<input type="hidden" name="ac" value="login">
		</td>
	</tr>
</table>

</form>
</body>
</html>
