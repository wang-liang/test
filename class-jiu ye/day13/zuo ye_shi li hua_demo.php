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
//定义一个“教师类”，并由此类实例化两个“教师对象”。该类至少包括3个属性，3个方法，其中有个方法是“自我介绍”，就能够把自身的所有信息显示出来。
class Teacher{
	public $name="张三";
	public $age;
	public $edu;
	function showInfo(){
		echo "<br />名字:" . $this->name;
		echo "<br />年龄:" . $this->age;
		echo "<br />学历:" . $this->edu;
	}
}
$teacher = new Teacher();
$teacher ->name = "罗弟华";
$teacher ->age = 40;
$teacher ->edu = "大学";
$teacher ->showInfo();
echo "<br />";
//定义一个“学生类”，并由此类实例化两个“学生对象”。该类包括姓名，性别，年龄等基本信息，并至少包括一个静态属性（表示总学生数）和一个常量，以及包括构造方法和析构方法。该对象还可以调用一个方法来进行“自我介绍”（显示其中的所有属性）。构造方法可以自动初始化一个学生的基本信息，并显示“ｘｘ加入传智，当前有xx个学生”。
class stu{
	const G = 9.8;
	public $name = '李四';
	public $sex = '男';
	public $age = 22;
	public $school = '传智';
	public $edu = '大学';
	static $count=0;
	function __construct($name,$sex,$age,$school,$edu) //形参，构造方法
	{
		$this->name = $name;  //name是属性，$name是形参
		$this->sex = $sex;
		$this->age = $age;
		$this->school = $school;
		$this->edu = $edu;
		self::$count++; //计数，计算有多少个学生（实例）    
		echo "<br />{$name}加入传智，当前有" . self::$count . "个学生";
	}
	function showInfo(){
		echo "<br />姓名：" . $this->name;
		echo "<br />性别：" . $this->sex;
		echo "<br />年龄：" . $this->age;
		echo "<br />毕业院校：" . $this->school;
		echo "<br />学历：" . $this->edu;
	}
	function __destruct(){   //析构方法
		echo "<br />{ $this->name}对象被销毁"//对象是反向销毁
	}
}

$stu = new stu('李四','男',23,'北京大学','大学'); 
$stu->showInfo();



?>
</body>
</html>
