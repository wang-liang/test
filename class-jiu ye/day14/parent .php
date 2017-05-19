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
//parent代表对象调用实例方法
class C{
	public $p1 = 1;
	function showInfo(){
		echo "<br />C中的属性p1:" . $this->p1;
		echo "<pre>";
			var_dump($this);
		echo "</pre>";
	}
}
class D extends C{
	function Show2(){
		echo "<p>调用父类中的实例方法：";
		parent::showInfo();//调用父类实例方法
		//这里可用的前提是
		//这个方法show2的调用这是一个对象
	}
}
$d1 = new D();
$d1->Show2();
?>
</body>
</html>
