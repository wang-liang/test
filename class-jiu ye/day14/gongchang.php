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
class A{}
class B{}
//设计一个工厂类：这个工厂类，有一个静态方法；
//通过该方法可以获得指定类的对象！
class Gongchang{
	static function GetObject($className){
		$obj = new $className(); //可变类
		return $obj;
	}
}
$o1 = Gongchang::GetObject("A");
$o2 = Gongchang::GetObject("B");
$o3 = Gongchang::GetObject("A");
var_dump($o1); echo "<br />";
var_dump($o2); echo "<br />";
var_dump($o3); echo "<br />";


?>
</body>
</html>
