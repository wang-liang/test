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

//继承基本概念
class A{
	public $p1 = "这是A中属性";
	function f1(){
		echo "<br />这是中方法f1";
	}
}
class B extends A{
	public $p2 = "这是B中属性";
}
$b1 = new B();
echo "<br />" . $b1->p1;
$b1->f1();




//三种修饰符
class EA{
	public $p1 = 1;
	protected $p2 = 2;
	private $p3 = 3;
}
$a1 = new EA();
echo "<br />a1->p1=" . $a1->p1;
//echo "<br />a1->p3=" . $a1->p3;//出错，因为这里是外部，又是private修饰


class FA{
	public $p1 = 1;
	protected $p2 = 2;
	private $p3 = 3;

	function showInfo(){
		echo "<br />this->p1" . $this->p1; 
		echo "<br />this->p2" . $this->p2;
		echo "<br />this->p3" . $this->p3;
		//可见在一个类的内部，3种修饰的成员都可以访问
	}
}
$a1 = new FA();
$a1->showInfo();


class FFF extends FA{
	function ShowParentInfo(){
		echo "<br />this->p1" . $this->p1; //OK！这里是父类的public修饰，位置为子类内部
		echo "<br />this->p2" . $this->p2;//OK!这里是父类的protected修饰，位置为子类内部
		//echo "<br />this->p3" . $this->p3;//这一行出错这里是继承类内部，并且为私有的
	}
}






//parent关键字演示
class AA{
	static $p1 = 1; //没有写访问修饰符，就是public
	static protected $p2 =2;
}
class BB extends AA{
	static function Show(){
		echo "<p>这里是子类B中的方法";
		echo "<br />这里要显示父类的属性p1:" . parent::$p1;
		echo "<br />这里要显示A类属性的属性p2:" . AA::$p2;
	}
}
BB::Show(); //静态方法，直接使用类名来调用


//下面演示使用parent代表“对象”的情况（调用实例方法）
class C{
	public $p1 = 1;
	function showInfo(){
		echo "<br />C中的属性p1:" . $this->p1;
		echo "<pre>";
			var_dump($this);//输出$this
		echo "</pre>";
	}
}
class D extends C{
	function Show2(){
		echo "<p>调用父类中的实例方法：";
		parent::showInfo();//调用父类实例方法
	}
}
$d1 = new D();
$d1->Show2();


class X{
	function __construct(){
		echo "<br />父类中的构造方法";
		var_dump($this);
	}
}
class E extends X{
	function __construct(){
		echo "<br />子类中的构造方法";
		var_dump($this);
	}
}
class F extends X{
	//这个类中没有构造方法
}
$o1 = new E();
$o2 = new F();





//parent在构造方法中的一个典型代码（写法）：
//“手动”调用父类的同类方法

class Member{
	public $name = "匿名";
	public $age = 18;
	public $sex;
	function __construct($name,$age,$sex){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}
}
//讲师类
class Teacher extends Member{
	public $edu = "大学";
	public $major;
	function __construct($name,$age,$sex,$edu,$major){
		parent::__construct($name,$age,$sex);
		$this->edu = $edu;
		$this->major = $major;
	}
	function ShowInfo(){
		echo "<br />姓名：{$this->name}";
		echo "<br />年龄：{$this->age}";
		echo "<br />性别：{$this->sex}";
		echo "<br />学历：{$this->edu}";
		echo "<br />专业：{$this->major}";
	}
}
$t1 = new Teacher('张三',30,'男','大学','PHP');
$t1->ShowInfo();



//工厂模式
class S{};
class Q{};
class Gongchang{
	static function GetObject($className){ //静态方法
		$obj = new $className();//这是可变类
		return $obj;
	}
}
$o1 = Gongchang::GetObject("S"); //
$o2 = Gongchang::GetObject("Q");
$o3 = Gongchang::GetObject("S");
var_dump($o1);echo "<br />";
var_dump($o2);echo "<br />";
var_dump($o3);echo "<br />";



//单例模式
class Single{
	//第一步：私有化构造方法：
	private function __construct(){
		
	}
	//第二步：定义一个静态属性（私有化），初始为null
	static private $instance = null;
	//第三步：定一个静态方法，从中判断对象是否生成并适当返回该对象
	static function GetObject(){  //静态方法
		if(!(self::$instance instanceof new self()))
		{
			$obj = new self();  //就生产一个
			self::$instance = $obj;  //并妥当地封装起来
			return $obj;//然后返回
		}
		else
		{
			return self::$instance; //就直接返回已经生产的对象
		}
	}
}
$obj1 = Single::GetObject();
$obj2 = Single::GetObject();
var_dump($obj1);echo "<br />";
var_dump($obj2);echo "<br />";


?>
</body>
</html>
