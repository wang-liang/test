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
class A{
	//这是一个魔术方法，在A的对象调用不存在的方法的时候
	//会被自动顶用来应对这种情况：
	//$Func_name用来接收不存在的方法名
	function __call($Func_name,$argument){ //这里$argument是一个数组
	if($Func_name==='f1')
	{
		$len = count($argument);
		if($len<1 || $len>3)
		{
			trigger_error("使用非法的方法！",E_USER_ERROR);
		}
		else if($len == 1)
		{
			$v1 = $argument[0]; 
			return $v1;
		}
		else if($len == 2)
		{
			$v1 = $argument[0];
			$v2 = $argument[1];
			return $v1*$v1 + $v2*$v2;  //或pow($v1,2) + pow($v2,2)
		}
		else if($len == 3)
		{
			$v1 = $argument[0];
			$v2 = $argument[1];
			$v3 = $argument[2];
			return $v1*$v1*$v1 + pow($v2,3) + pow($v3,3);
		}
	}
}
$a1 = new A();
$v1 = $a1->f1(1);
$v2 = $a1->f1(2,3);
$v3 = $a1->f1(4,5,6);
?>
</body>
</html>
