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
〉〉，
利用上一道题的逻辑思路，写一个函数，该函数能够判断一个数字是否是一个素数
（是就返回true，否则就返回false）。再利用该函数，输出2-200之间的所有素数。
*/
function panduan($n)
{
	$c=0;  //用于记录能被整除的个数！--计数
	for($i=1;$i<=$n;$i++)
	{
		if($n % $i == 0)
		{
			$c++;
		}
	}
	if($c==2)
	{
		return true;
	}
	else
	{
		return false;
	}
}
echo "2-200之间的素数：";
for($i = 2;$i<=200;$i++)
{
	if(panduan($i) == true)
	{
		echo "{$i}";
	}
}
//扩展一个函数的思想：写一个函数，判断某个年份是否是闰年：
function runnian($n)
{
	if($n % 4 ==0 && $n % 100 !=0 || $n % 400 == 0)
	{
		//echo "{$n}是闰年";       //这种写法不符合题意
		return true;
	}
	else
	{
		return false;
	}
}
/*
〉〉，
写一个函数，该函数可以将给定的任意个数的参数以指定的字符串串接起来成为一个长的字符串。该函数带2个或2个以上参数，其中第一个参数是用于将其他参数进行串联的连接字符串。比如调用该函数：
chuanlian(“-”, “ab”, “cd”, 123);	//得到结果为字符串：”ab-cd-123”
*/
function chuanlian()
{
	$arr = func_get_args(); //获得所有实参
	$s1 = $arr[0];  //用作串接符
	$str = "";      //用于存储串联之后的结果，每次串联之后的结果放入一个空字符串中
	for($i=1;$i<count($arr);$i++)
	{
		if($i==count($arr)-1) //
		{
			$str .= $arr[$i]; //如果是最后一项，就输出最后一项的值
		}
		else
		{
			$str .= $arr[$i].$s1; //串联数组下标从1开始的每一项
		}
	}
	return $str;
}
$str = chuanlian('-',"ab","cd",123);
echo "<hr />串联之后的结果为：$str";


/*
〉〉，
数列如下：【1】，【2】，3，6，9，18，27… ，求第20项的值是多少？
（注意，规律就是第n个数是第n-2个数的3倍，已知第一个是1，第二个是2）。
*/

//方法2：递推

function shulie2($n)
{
	$qian1 = 1;
	$qian2 = 2;
	for($i=3;$i<=$n;$i++)
	{
		$result = $qian1*3;
		$qian1 = $qian2;  //这里每一个qian1都是上一次的qian2
		$qian2 = $result;
	}
	return $result;
}
$v2 = shulie2(20);
echo "<hr />20项是".$v2;


/*
猴子吃桃问题：
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
echo "<hr />";

//方法1：递归：
function taozishu1($n)
{
	if($n==10)   //当第10天时返回桃子个数为：1
	{
		return 1;
	}
	$total = taozishu1($n+1)*2;   
	return $total;
}
echo "<br />第1天桃子数为：".taozishu1(1);

//方法2：递推
function taozishu2($n)   //$n=1'表示第一天
{
	$qian = 1;    //代表第10天的个数
	for($i=9;$i>=$n;--$i)  //$i代表第几天
	{
		$result = ($qian+1)*2; // $qian代表第10天的个数,就是第9天的个数
		$qian = $result;  //这里可以理解为：第9天的桃子个数（$result）赋值给了$qian;
	} 
	return $result;  //返回结果
}
echo "<br />第1天桃子数为：".taozishu2(1);


function shulie($n){
	if($n ==1 || $n == 2){
		return 1;
	}

}


?>
</body>
</html>
