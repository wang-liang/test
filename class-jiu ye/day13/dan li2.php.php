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
class Single{
	//私有化一个构造方法
	private function __construct(){
	
	}
	//创建一个静态私有化变量，并赋值为null
	static private $instance = null;
	static function getobj(){
		if(isset(Single::$instance))//判断静态变量是否为空，空结果就为false
		{
			return Single::$instance;  //将对象返回
		}
		else //创建一个对象
		{
			$obj = new Single();  //创建一个对象（实例化）
			Single::$instance = $obj; //将这个对象保存到静态变量中
			return Single::$instance; //将结果返回给函数（方法）的调用（使用）者
		}
	}
}
$obj1 = Single::getobj();//使用一个静态方法，在这个方法中程序运行后的结果是对象
						 //就获得一个对象，如果是值，就在程序中输出具体的值
$obj2 = Single::getobj(); //使用静态方法，接收返回的结果
var_dump($obj1);echo "<br />";
var_dump($obj2);echo "<br />";

?>
</body>
</html>
