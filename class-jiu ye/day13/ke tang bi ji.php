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
const PP1 = 1;
define("PPP2",2);
class C1{
	const PI = 3.14;
	const G = 9.8;
}
$v1 = C1::PI*3*3;
echo "<br />v1 = $v1";
echo "<br />C1::G = " . C1::G;

class Student{
	public $name ='';
	static $count = 0;
}
$s1 = new Student();
$s1->name ="张三";
Student::$count++;

$s2 = new Student();
$s2->name ="王薇";
Student::$count++;


echo "<br />当前的学生对象总数为".Student::$count;

class Nvshen{
	var $name;
	var $age;
	var $edu;
	function __construct($p1,$p2,$p3){
		$this->name = $p1;  //将$p1数据赋值给当前对象的name属性
		$this->age = $p2;  //$this这个词就代表当前这个new出来的对象
		$this->edu = $p3;
	}
	function xiyifu(){
		echo "<br />{$this->age}岁的{$this->edu}学历";
		echo "的{$this->name}在洗衣服";
	}
}
$girl = new Nvshen('小花',18,'大学');
$girl->xiyifu();

class C1{
	public $name;
	function __construct($n){
		$this->name = $n;
	}
	function __destruct(){
	
		echo "<br />{$this->name}被销毁了";
	}
}
$o1 = new C1('A');

?>
</body>
</html>
