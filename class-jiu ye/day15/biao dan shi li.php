<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>网页标题</title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css">
.msg{color:red;}
</style>
<script type="text/javascript">

//页面加载完成，用户名获得焦点
var obj1, obj2, obj3;
window.onload = init;
function init()
{
	obj1 = document.getElementById("user");
	obj2 = document.getElementById("pwd");
	obj3 = document.getElementById("age");
	//当网页加载完成时，出现提示信息
	document.form1.username.focus();    // 用户名自动获得焦点
	obj1.innerHTML = "（字母开头，后跟字母或数字，至少两位，至多10位）";
	obj1.className = "msg";
	//密码框出现提示信息
	obj2.innerHTML = "（数字开头，至少6位，至多10位）";
	obj2.className = "msg";
}
//当用户名获得焦点时
function focusUsername()
{
	obj1.innerHTML = "（字母开头，后跟字母或数字，至少两位，至多10位）";
	obj1.className = "msg";
}
//当用户名移除焦点时
function blurUsername()
{
	//获取用户输入的值
	var str1 = document.getElementById("username").value;
	if(str1.length == 0) //用户名为空
	{
		obj1.innerHTML = "用户名不能为空";
		obj1.className = "msg";
		return false;
	}
	else if(str1.length < 2 || str1.length >10)
	{
		obj1.innerHTML = "用户名不符合要求";
		obj1.className = "msg";
		return false;
	}
	else
	{
		obj1.innerHTML = "<img src='images/register_write_ok.gif'>";
		return true;
	}
}
function focuspwd(){
	//当密码框获得焦点
	obj2.innerHTML = "（数字开头，至少6位，至多10位）";
	obj2.className = "msg";
}
function blurpwd(){
	//获取密码框中输入的值
	var str2 = document.getElementById("password").value;
	if(str2.length == 0) //密码为空
	{
		obj2.innerHTML = "密码不能为空";
		obj2.className = "msg";
		return false;
	}
	else if(str2.length < 6 || str2.length >10)
	{
		obj2.innerHTML = "密码不符合要求";
		obj2.className = "msg";
		return false;
	}
	else
	{
		obj2.innerHTML = "<img src='images/register_write_ok.gif'>";
		return true;
	}
}

</script>
</head>

<body>

<?php
/*
创建该表的结构：
先设计表结构
create table user_list(
    id int auto_increment primary key not null,
    username varchar(6),
    pwd varchar(15),
    age int comment '年龄',
    edu varchar(10) comment '学历',
    fav set('排球','篮球','足球','中国足球','地球') comment '爱好',
    from2 enum('东北','华北','西北','华东','华南','华西'),
    addate datetime
);
*/


//这里载入mysql数据库类,用于连接数据库
require './MySQLDB.class.php';
//定义一个数组，用于存放连接数据库的字段基本信息
$config = array(
	'host' =>"localhost",
	'port' => 3306,
	'user' => "root",
	'pass' => "root",
	'charset' => "utf8",
	'dbname' => "php44"
);
$db1 = MySQLDB::GetInstance($config); // 实例化数据库类


//这里的id值是通过get方式获取要删除的记录id

if(!empty($_GET['id']))
{
	$id = $_GET['id'];
	//构建删除语句
	$sql = "delete from user_list where id=$id";
	$db1->exec($sql);
	echo "删除记录成功！";
}

//表单提交时判断是否为空
if(!empty($_POST))
{
	//获取表单提交值
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	$age = $_POST['age'];
	$edu = $_POST['edu'];
	$fav = $_POST['fav']; //这里的$fav是一个数组
	
	$aihao = "";  //空字符串，用于串联所有项
	for($i=0;$i<count($fav);++$i)
	{
		if($i==count($fav)-1) //最后一项不加逗号
		{
			$aihao .= $fav[$i];
		}else
		{
			$aihao .= $fav[$i] . ",";
		}
	}
	//var_dump($aihao);
	//这个数组变为字符串还有更好的办法
	$aihao = implode(",",$fav);
	//implode($s1,$arr)函数，用于将数组$arr中的每一项，以指定的字符串$s1串联起来，成为一个"长字符串"
	$from = $_POST['from2'];
	//插入一条记录到数据库
	$sql = "insert into user_list(username,pwd,age,edu,fav,from2,addate) values('$username',$pwd,$age,'$edu','$aihao','$from',now())";
	$db1->exec($sql);	
	echo "<br />执行添加语句成功！";

}


?>

<form method="post" action="" name="form1" >
<table border="1" rules="all" width="700" align="center">
	<h2 align="center">添加数据</h2>
	<tr>
		<td width="100">用户名：</td>
		<td colspan="2"><input type="text" id="username" name="username" size="14"  onfocus="focusUsername()" onblur="blurUsername()">
		<span id="user" class="msg"></span>
		</td>
	</tr>
	<tr>
		<td>密码：</td>
		<td colspan="2"><input type="text" name="pwd"  id="password" size="12" onfocus="focuspwd()" onblur="blurpwd()">
		<span id="pwd" class="msg"></span>
		</td>
	</tr>
	<tr>
		<td>年龄：</td>
		<td colspan="2"><input id="age" type="text" name="age" size="8" onfocus="focusage()" onblur="blurage()">
		<span id="age" class="msg"></span>
		</td>
	</tr>
	<tr>
		<td>学历：</td>
		<td colspan="2">
			<select name="edu" id="edu" onchange="checkEdu">
				<option value="请选择">请选择</option>
				<option value="初中">初中</option>
				<option value="高中">高中</option>
				<option value="大专">大专</option>
				<option value="大学">大学</option>
			</select>
			<span id="eduMsg" class="msg"></span>
		</td>
	</tr>
	<tr>
		<td>兴趣：</td>
		<td colspan="2">
		<input type="checkbox" name="fav[]" value="排球">排球
		<input type="checkbox" name="fav[]" value="篮球">篮球
		<input type="checkbox" name="fav[]" value="足球">足球
		<input type="checkbox" name="fav[]" value="中国足球">中国足球
		<input type="checkbox" name="fav[]" value="地球">地球
		</td>
	</tr>
	<tr>
		<td>来自：</td>
		<td colspan="2">
			<input type="radio" name="from2" value="东北" onclick="clickFrom()">东北
			<input type="radio" name="from2" value="华北" onclick="clickFrom()">华北
			<input type="radio" name="from2" value="西北" onclick="clickFrom()">西北
			<input type="radio" name="from2" value="华东" onclick="clickFrom()">华东
			<input type="radio" name="from2" value="华南" onclick="clickFrom()">华南
			<input type="radio" name="from2" value="华西" onclick="clickFrom()">华西
			<span id="fromMsg"></span>
		</td>
	</tr>
	<tr>
		<td ><input type="submit" value="o k"></td>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
</form>
<br />


<?php


//下面的内容要和上面表单提交要分开，否则删除后页面无法返回到表单管理页面
//从数据库中查找一条记录
$sql = "select * from user_list";
//$result = mysql_query($sql);  //这里是原来的写法！
$result = $db1->GetRows($sql);  //调用类中方法
//如果执行成功，将数据写入到表格中
echo "<table border='1' align='center' width='700'>";
foreach( $result as $key => $rec ){ //遍历二维数组，此时$rec是个一维数组
	echo "<tr>";
	echo "<td>" . $rec['username'] . "</td>";
	echo "<td>" . $rec['age'] . "</td>";
	echo "<td>{$rec['edu']}</td>";
	echo "<td>{$rec['fav']}</td>";
	echo "<td>{$rec['from2']}</td>";
	echo "<td>{$rec['addate']}</td>";
	echo "<td>";
	echo "<a href='?id={$rec['id']}' onclick='return delRow()'>删除</a>"; //这里？前面不写地址，表示默认会跳转到当前页面不能
	echo "</td>";
	echo "</tr>";
}
	echo "</table>";


$user_count = $db1->GetOneData('select count(*) as 访问人数 from user_list');
?>
<p align='center'><font face='黑体' size='6'>当前用户总数为：<?php echo $user_count; ?></font></p>

</body>
</html>

<script>
//删除一条记录
function delRow()
{
	if(window.confirm("你确定要删除吗？"))  
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>