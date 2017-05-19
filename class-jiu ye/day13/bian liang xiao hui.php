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
class C1{
	public $name;
	function __construct($n){
		$this->name = $n;
	}
	function __destruct(){ //析构方法，不能带参数
		echo "<br />{$this->name}被销毁了";
	}
}
$o1 = new C1('A');
$o2 = new C1('B');
$o3 = new C1('C');

echo "<br />";var_dump($o1);
echo "<br />";var_dump($o2);
echo "<br />";var_dump($o3);
echo "<hr />";

?>
</body>
</html>
