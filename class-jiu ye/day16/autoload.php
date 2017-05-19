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
/*
function __autoload($class_name){
	require './class/' . $class_name . '.class.php';
}
$obj1 = new A();
var_dump($obj1);
*/


//这里演示自定义的自动加载函数的使用：
spl_autoload_register("autoload1");  //声明autoload1作为自动加载函数
spl_autoload_register("autoload2");  //声明autoload2作为自动加载函数

function autoload1($class_name){
	echo "<br />准备在autoload1 加载这个类：$class_name";
	$file = './class/' . $class_name . ".class.php";

		include $file;

	//如果步存在，则本函数就没有成功加载该类文件，就会继续找后续加载函数！
}

function autoload2($class_name){
	echo "<br />准备在autoload2加载这个类：$class_name";
	$file = './lib/' . $class_name . ".class.php";

		require $file;
	
}

$a1 = new A(); //这个类在class目录下
echo "<br />";
var_dump($a1);
$b1 = new B();
echo "<br />";
var_dump($b1);

?>
</body>
</html>
