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
	public $p1 = 1;
}
$obj1 = new A();
$obj1->p1 = 10;
$obj2 = $obj1;
var_dump($obj1);
echo "<br />";
var_dump($obj2);
echo "<br />";
$obj3 = clone $obj1;
var_dump($obj3);
echo "<hr />";

$obj1->p1 = 22; //重新对属性赋值
var_dump($obj1);echo "<br />";  //输出变量的完整信息
var_dump($obj2);echo "<br />";
var_dump($obj3);echo "<br />";


?>
</body>
</html>
