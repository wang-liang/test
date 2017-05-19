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
定义一个“学生类”，并由此类实例化两个“学生对象”。
该类包括姓名，性别，年龄等基本信息，并至少包括一个静态属性（表示总学生数）和一个常量，
以及包括构造方法和析构方法。
该对象还可以调用一个方法来进行“自我介绍”（显示其中的所有属性）。
构造方法可以自动初始化一个学生的基本信息，并显示“ｘｘ加入传智，当前有xx个学生”。
*/
class Student{
	const SCHOOL = "传智";//定义一个类常量
	public $name = "张三";
	public $age = "18";
	public $edu = "大专";
	static $count = 0; //静态属性，计数
	function __construct($name,$age,$edu){ //构造方法，形参接收数据
		$this->name = $name; //给当前$obj1这个对象的属性赋值
		$this->age = $age; 
		$this->edu = $edu;
		self::$count++;  //静态属性被使用
		echo "<br />{$name}加入传智，当前有" . self::$count . "个学生";
	}
	public function showInfo(){ //该类中的一个方法（可以自我介绍）
		echo"<p>";
		echo "<br />姓名" . $this->name; //实例属性的使用形式: $对象->属性名；
		echo "<br />年龄" . $this->age;  //因为属性的本质就是变量，则其就可以当做一个变量来使用
		echo "<br />学历" . $this->edu;  //这里是$obj1这个对象调用showInfo()方法
		echo "</p>"; 
	}
	function __destruct(){   //析构方法
		echo "<br />{$this->name}对象被销毁";
	}
}
$obj1 = new Student('李四',19,'大学'); //实例化一个学生，同时调用构造函数，并传实参给构造方法
$obj1->showInfo();                     //通过对象调用方法
$obj2 = new Student('王大明',24,'高中');
$obj2->showInfo();

?>
</body>
</html>
