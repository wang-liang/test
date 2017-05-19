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
//单例模式
//就是设计这样一个类，这个类只能“创造”出它的一个对象（实例）
class Single{
	//第一步：私有化构造方法：
	private function __construct(){
		
	}
	//第二步：定义一个静态属性，初始为null
	static private $instance = null;
	static function GetObject(){
		if(isset(Single::$instance))
		{
			return self::$instance;
		}else
		{
			$obj = new self();
			self::$instance = $obj;
			return $obj;
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
