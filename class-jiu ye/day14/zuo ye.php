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
设计如下几个类：
商品类，有名称，有价钱，库存数，可显示自身信息（名称，价钱）。
手机类，是商品的一种，并且有品牌，有产地，可显示自身信息。
图书类，是商品的一种，有作者，有出版社， 可显示自身信息。
创建一个手机对象，并显示其自身信息；
创建一个图书对象，并显示其自身信息；
扩展要求：尽量体现封装性就更好了。
*/

class product{
	public $name;
	public $price = 0;
	public $kucun = 0;
	function __construct($name,$price,$kucun){  //这里的$name是形参
		$this->name = $name;  //这里的name是属性，$name是具体的值
		$this->price = $price;
		$this->kucun = $kucun;
	}
	function showSelf1(){
		echo "<br />商品名称：" . $this->name;
		echo "<br />商品价格：" . $this->price;
	}
}

class phone extends product{ 
	public $pinpai;  //实例属性
	public $chandi;
	function __construct($name,$price,$kucun,$pinpai,$chandi){
		parent::__construct($name,$price,$kucun);  //调用父类的构造方法
		$this->pinpai = $pinpai;  //给对象的属性赋值
		$this->chandi = $chandi;
	}
	function showSelf2(){
		parent::showSelf1();
		echo "<br />商品库存：" . $this->kucun;
		echo "<br />品牌：" . $this->pinpai;
		echo "<br />产地：" . $this->chandi;
	}
}
$obj2 = new phone("手机",4799,5,"联想","北京");
$obj2->showSelf2();

echo "<br />";
class book extends product{
	public $aothur;
	public $chubanshe;
	function __construct($name,$price,$kucun,$aothur,$chubanshe){
		parent::__construct($name,$price,$kucun);
		$this->aothur = $aothur;
		$this->chubanshe = $chubanshe;
	}
	function showSelf3(){
		parent::showSelf1();
		echo "<br />商品名称：" . $this->name;
		echo "<br />作者：" . $this->aothur;
		echo "<br />出版社：" . $this->chubanshe;
	}
}
$obj3 = new book("碧血剑",29.8,35,"金庸","浙江大学出版社");
$obj3->showSelf3();
echo "<br />";




//实现一个单例类。
class Single{
	//创建一个私有化构造方法
	private function __construct(){
	
	}
	//创建一个静态属性，将其私有化并赋值为null
	static private $contest = null;
	static function getObj(){ //这是静态方法
		if(!isset(Single::$contest))  //使用静态变量
		{
			$obj = new self();//就创建一个对象
			Single::$contest = $obj;//保存到静态变量中
			return Single::$contest;//返回结果
		}else  //如果有对象存在
		{
			return Single::$contest; //直接返回结果
		}
	}
}
$obj1 = Single::getObj();  //调用静态方法，接收返回的对象
$obj2 = Single::getObj();
var_dump($obj1);echo "<br />";
var_dump($obj2);echo "<br />";
/*
设计一个“mysql数据库操作类”，要求：
1，设计该类的必要属性；
2，可以创建数据库对象的同时并建立跟数据库的连接（或连接失败信息）；
2.1，可以在建立连接的同时设定所要连接的数据库和所要使用的连接编码；
2.2，还可以单独设置所要连接的数据库；
2.3，还可以单独设置所要使用的连接编码；
3，可以断开连接；
实例化该类并进行简单测试。
*/

class MysqlDB{
	public $link = null;  //创建一个连接$link
	function __construct($host,$port,$user,$pass,$charset,$dbname){
		$this->link = @mysql_connect("$host:$port","$user","$pass") or die("连接失败");
		mysql_query("set names $charset");
		mysql_query("use $dbname");
	}
		//设置要连接的字符编码
		function setCharset($charset){
			mysql_query("set names $charset"); 
		}
		//选择要使用的数据库
		function selectDB($dbname){
			mysql_query("use $dbname");
		}
		//可关闭连接
		function closeDB(){
			mysql_close($this->link);
		}
}
$host = "localhost";
$port = 3306;
$user = "root";
$pass = "root";
$charset = "utf8";
$dbname = "shop";

$db1 = new MysqlDB($host,$port,$user,$pass,$charset,$dbname); // 实例化

//测试是否连接成功
$result = mysql_query("select * from product");
var_dump($result);

//测试修改编码
//$db1->setCharset("gbk");

$result2 = mysql_query("select * from product");
$rec = mysql_fetch_array($result2);
echo "<hr>";
echo $rec['pro_name'];

//测试关闭连接：
$db1->closeDB();  //使用对象的方法
$result = @mysql_query("select * from product");
var_dump($result);


?>
</body>
</html>
