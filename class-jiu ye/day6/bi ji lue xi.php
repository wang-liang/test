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
function jpg(){echo "<br />处理jpg图片";}
function png(){echo "<br />处理png图片";}
function gif(){echo "<br />处理gif图片";}
$file = "abc.jpg";//代表用户上传的图片；
                 //其后缀可能是jpg、gif、png等
//strrchr($s1,$s2)用于获取字符串$s1中最后一次
//出现的字符$s2之后的所有内容（包含$s2）
$houzhui = strrchr($file,".");
//获取该字符串从位置1开之后的所有字符
$houzhui = substr($houzhui,1);
$houzhui();//可变变量!


echo "<hr />";
$v5 = 5;   //全局变量
function f5(){
	echo "<br / > 在局部访问全局变量v5 = " . $GLOBALS['v5'];
	$GLOBALS['5'] = 55; //修改其值

}
f5();
echo "<br />在全局在此访问v5 = " . $v5;
echo "<br />在全局在此访问v5 = " . $GLOBALS['v5'];

//判断一个函数是否存在
if(function_exists("f1") == false)
{
	function f1()
	{
		echo "<br />这个函数我自己定义了！";
	}
}
f1();  //调用函数

function jiechen($n)
{
	if($n==1)
	{
		return 1;
	}
	$jieguo = $n * jiechen($n-1);
	return $jieguo;
}
$v2 = jiechen(5);
echo "<br />v2 = $v2"."<br />";


function shulie($n)
{
	if($n==1 || $n==2)
	{
		return 1;
	}
	$jieguo = shulie($n-1) + shulie($n-2);
		return $jieguo;
}
$v1 = shulie(20);
echo $v1;

echo "<br />";
//递推思想
$qian1 = 1;
$qian2 = 1;
for($i=3;$i<=20;$i++)
{
	$jieguo = $qian1 + $qian2;
	$qian1 = $qian2;
	$qian2 = $jieguo;
}
echo $jieguo;
?>
</body>
</html>
