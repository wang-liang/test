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
/*写一个函数，该函数能够判断一个数字是否是一个素数（是就返回true，否则就返回false）再利用该函数，输出2-200之间的所有素数。*/

function fun1($n)
{
		$count = 0;
		for($i=1;$i<=$n;$i++)
		{
			if($n%$i==0)
			{
				$count++;
			}
		}
		if($count==2)
		{
			return true;
		}
		else
		{
			return false;
		}
}
echo "2-200之间的素数有：";

for($i=2;$i<=200;$i++)
{
	if(fun1($i) == true)
	{
		echo "{$i}";
	}
}
//这里的思想是要利用该函数完成某种任务
/***********自己写的**********************/
function fun2()
{
	for($n=2;$n<=200;$n++)
	{
		$c = 0;
		for($i=1;$i<=$n;$i++)
		{
			if($n%$i==0)
			{
				$c++;
			}
		}
		if($c==2)
		{
			echo "{$n}"." ";
		}
	}
}
fun2();  //调用函数
echo "<br />";

/*写2个函数，分别可以求得两个正整数的最大公约数和最小公倍数。*/
/*
function getR($m,$n)
{
	if($m<$n)
	{
		$min=$m;
		$max=$n;
	}
		for($i=1;$i<=$min;$i++)
		{
			if($max%$i==0 && $min%$i==0)
			{
				
			}
		}
}
getR(24,36);        //未完成
*/
/*写一个函数，该函数可以将给定的任意个数的参数以指定的字符串串接起来成为一个长的字符串。该函数带2个或2个以上参数，其中第一个参数是用于将其他参数进行串联的连接字符串。比如调用该函数：chuanlian(“-”, “ab”, “cd”, 123);	//得到结果为字符串：”ab-cd-123”*/

function chuanlian($a,$b,$c)
{
	$arr = func_get_args();
	$s1 = $arr[0];   //用作串接符
	$str = "";       //用于存储串接之后的结果
	for($i = 1;$i<count($arr);++$i)
	{
		$str .= $arr[$i].$s1;
	}
	return $str;
}
$str1 = chuanlian("-","ab","cd");
echo "<hr />串联后的结果为：$str1";


/*使用递归法和递推法（迭代法）求n的阶层（n为任意给定的大于等于1的整数）。*/
//递归思想     1*2*3*4*5*6
echo "<br />";
function jiechen($n)
{
	if($n==1)
	{
		return 1;
	}
	$jieguo = $n * jiechen($n-1);
	return $jieguo;
}
$v1 = jiechen(6);
echo $v1."<br />";


//递推思想
// 1*2*3*4*5*6
$n=6;
$qian = 1;
for($i=2;$i<=$n;$i++)
{
	$jieguo = $qian * $i;
	$qian = $jieguo;
}
echo $jieguo."<br />";

/*数列如下：【1】，【2】，3，6，9，18，27… ，求第20项的值是多少？（注意，规律就是第n个数是第n-2个数的3倍，已知第一个是1，第二个是2）。*/
//方法1递归
function chenji($n)
{
	if($n==1)
	{
		return 1;
	}
	else if($n==2)
	{
		return 2;
	}
	$jieguo = 3 * chenji($n-2);
	return $jieguo;
}
$v1 = chenji(20);
echo $v1."<br />";

//方法2递推

/*猴子吃桃问题：
有一堆桃子，猴子第一天吃了其中的一半，并再多吃了一个！
以后每天猴子都吃其中的一半，然后再多吃一个。
当到第十天时，想再吃时（即还没吃），发现只有1个桃子了。
问题：最初共多少个桃子？
分析：
天		数量
10		1
9		(1+1)*2=4
8		(4+1)*2=10
7		(10+1)*2=22
。。。。。。
第n天   （第n+1天的个数+1）*2
（可用递归法和递推法完成）
*/

function eat()
{
	$total = 1;
	for($n=9;$n>=1;--$n)
	{
		$total = ($total+1)*2;
	}
		return $total;
}
echo eat()."<br />";



?>



</body>
</html>
