<?php
header("Content-type:text/html;charset=utf8");
/*
$i = $j = 1;
while($i<9){
	echo "<tr>";
	while($j<=$i){
			echo "<td>123</td>";
			$j++;
	}
	echo "</tr><br />";
	$i++;
}
//echo "我是\\n\\r天才<table align=center>$abc</table>";

$sql="INSERT INTO user(name,tel,content,date)VALUES('王五','1611111111'，'大专'，'2016-06-06')"; 
$link=mysql_connect('localhost','root','root');
$sql="UPDATE user SET tel = '19012345678' WHERE name = '李四'";
$sql="DELETE FROM user WHERE name = '张三'";
*/

//示例1：
/*
class Student{
	const TITLE="第51期PHP就业班";
	public static $db_host="localhost";
	public static $sum=10;
	public static function readMe(){
		self::$sum++;
		echo self::$sum;
	}
	public function sums(){
		self::$sum++;
		echo self::$sum;
	}
}

class ItcastStudent extends Student{
	public static $sum=20;
	public function sums(){
		self::$sum++;
		echo self::$sum;
	}
	public static function readMe(){
		self::$sum++;
		echo self::$sum;
	}
}
$obj1=new Student;
$obj1->sums(); //调用自己的sums方法
Student::readMe(); //调用自己的静态方法
ItcastStudent::readMe(); //子类调用自己的静态方法 
echo "<hr>";
$obj2=new ItcastStudent;
$obj2->sums();  //子类调用自己的sums方法
Student::readMe(); //父类调用自己的静态方法
ItcastStudent::readMe(); //子类调用自己的静态方法 
*/

//示例2：
/*
class Student{
	const TITLE="第51期PHP就业班";
	public static $db_host="localhost";
	public static $sum=10;
	public static function readMe(){
		self::$sum++;
		echo self::$sum;
	}
	public function sums(){
		self::$sum++;
		echo self::$sum;
	}
}

class ItcastStudent extends Student{
	public static $sum=20;
	public function sums(){
		self::$sum++;
		echo self::$sum;
	}
	/*public static function readMe(){
		self::$sum++;
		echo self::$sum;
	}
}*/
/*
$obj1=new Student;
$obj1->sums();
*/
/*
$obj1->sums(); //调用自己的sums方法
Student::readMe(); //调用自己的静态方法
ItcastStudent::readMe(); //子类调用继承过来的静态方法 
echo "<hr>";
$obj2=new ItcastStudent;
$obj2->sums();  //子类调用父类的sums方法
Student::readMe(); //父类调用自己的静态方法
ItcastStudent::readMe(); //子类调用继承过来的静态方法 
*/

/*
class Student{
	public static $sum=10;
	public static $str = 111;
	public static function readMe(){
		self::$sum++;
		echo self::$sum;
	}
	public static function readMe1(){
		self::$str++;
		echo self::$str;
	}
}
class ItStudent extends Student{
	public static $sum;
	public static $str = 333;
	public static function readMe(){
		self::$str++;
		echo self::$str;
	}
	public static function readMe1(){
		self::$sum++;
		echo self::$sum;
	}
}
//$obj=ItStudent::readMe();
$obj = new ItStudent();
var_dump($obj);
echo ItStudent::$sum;
echo ItStudent::$str;
*/
/*
class A{
	 public static $num=0;
	 private $name;
	 private function show(){
		 echo 'Tom在值日';
	 }
	 function __construct(){
		var_dump($this);
		$this->name='Tom';
		self::$num++;
	 }
}
class B extends A{ }
$obj = new B();
*/
//var_dump($obj);
/*class A{
	  public static $num=0;
	  public function __construct(){
		 self::$num++;
	  }
  }
new A();
new A();
new A();
echo A::$num;*/

$str = "/[1-9][0-9]{0,1}|^100$/";
preg_match($str,'a100',$res);

print_r($res);

function test($n){
	if($n>0){
		echo $n,",";
		test($n-1);
		echo $n,",";
	}
}
test(10);




