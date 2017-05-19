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
class A{
	static $p1 = 1;
	static function show1(){
		echo "<br />self::p1 = " . self::$p1;
		echo "<br />static::p1 = " . static::$p1;
	}
}
class B extends A{
	static $p1 = 11;  //重写了$p1
}
A::show1();
echo "<br />";
B::show1();

class A{}
class B{}

class Gongchang{
	static function GetObj($class_name){
		$obj = new $class_name();
		return $obj;
	}
}
$o1 = Gongchang::GetObj("A");
var_dump($o1);
?>
</body>
</html>
