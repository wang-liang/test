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
define("G",9.8);
$t = 2*1000/G;
$t = pow($t,0.5);
$v = G * $t;
echo "速度为：$v"."<br />";

$t = 1000/G;
$h = (G * pow($t,2))/2;
$h = round($h);
echo "掉落时的高度为：$h"."<br />";

/*************************************************/

$h = 123 >> 3;
echo "123右移3位的结果：$h"."<br />";

$h = 123 << 3;
echo "123左移3位的结果：$h"."<br />";

$h = 123 & 45;
echo "123和45按位与的结果：$h"."<br />";

$h = 123 | 45;
echo "123和45按位或的结果：$h"."<br />";

/*************************************************/

//已知：公鸡5元一只，母鸡3元一只，小鸡一元3只。现用100元钱买了100只鸡，问：公鸡母鸡小鸡各几只？——请考虑尽可能高效的方法。

for($i=1;$i<100/5;++$i)
{
	for($j=1;$j<100/3;++$j)
	{
		$k = 100 - $i - $j;
		if($i*5+$j*3+$k/3==100)
		{
			echo "公鸡的个数：$i"."<br/>";
			echo "母鸡的个数：$j"."<br/>";
			echo "小鸡的个数：$k"."<br/>";
		}
	}
}

/*************************************************/

$n=5;
define("KONGGE","-");
for($i=1;$i<=$n;++$i)
{
	for($j=1;$j<=$n;++$j)
	{
		echo "*";
	}
	echo "<br />";
}
echo "<br />";
/*************************************************/
//输出i行*号
for($i=1;$i<=$n;++$i)
{
	//输出一行*号
	for($j=1;$j<=$i;++$j)
	{
		echo "*";
	}
	echo "<br />";//一行结束输出<br/>换行
}
echo "<br />";

/*************************************************/
/*
1  2  3  4  5
1  3  5  7  9
*/
for($i=1;$i<=$n;++$i)
{
	for($j=1;$j<=$i*2-1;++$j)
	{
		echo "*";
	}
	echo "<br />";//一行结束输出<br/>换行
}
echo "<br />";
/*************************************************/
for($i=1;$i<=$n;++$i)
{
	for($k=$n-$i;$k>=1;--$k)
	{
		echo KONGGE;
	}
	for($j=1;$j<=$i*2-1;++$j)
	{
		echo "*";
	}
	echo "<br />";//一行结束输出<br/>换行
}

echo "<br />";
/********************************************/

for($i=1;$i<=$n;++$i)
{
	for($k=$n-$i;$k>=1;--$k)
	{
		echo KONGGE;
	}
	for($j=1;$j<=$i*2-1;++$j)
	{
		if($j==1||$j==$i*2-1/*如果是第一个或最后一个*/)
		{
			echo "*";
		}
		else
		{
			echo KONGGE;
		}
	}
	echo "<br />";//一行结束输出<br/>换行
}
echo "<br />";
/*****************************************************/

for($i=1;$i<=$n;++$i)
{
	for($k=$n-$i;$k>=1;--$k)
	{
		echo KONGGE;
	}
	for($j=1;$j<=$i*2-1;++$j)
	{
		if($i==$n/*如果是最后一行*/)
		{
			echo "*";
		}
		else
		{
			if($j==1||$j==$i*2-1/*如果是第一个或最后一个*/)
			{
				echo "*";
			}
			else
			{
				echo KONGGE;
			}
		}
	}
	echo "<br />";//一行结束输出<br/>换行
}
	
echo "<br />";

/******************************************************/
for($i=1;$i<=$n;++$i)
{
	for($k=$n-$i;$k>=1;--$k)
	{
		echo KONGGE;
	}
	for($j=1;$j<=$i*2-1;++$j)
	{
		if($i==$n)
		{
			echo "*";
		}
		else
		{
			if($j==1||$j==$i*2-1)
			{
				echo "*";
			}
			else
			{
				echo KONGGE;
			}
		}
	}
	echo "<br />";//一行结束输出<br/>换行
}
echo "<br />";

/**************************************************/
for($i=1;$i<=$n;++$i)
{
	for($k=$n-$i;$k>=1;--$k)
	{
		echo KONGGE;
	}
	for($j=1;$j<=$i*2-1;++$j)
	{
		if($i==$n)
		{
			echo "*";
		}
		else
		{
			if($j==1||$j==$i*2-1)
			{
				echo "*";
			}
			else
			{
				echo KONGGE;
			}
		}
	}
	echo "<br />";//一行结束输出<br/>换行
}
for($i=$n-1;$i>=1;--$i)
{
	for($k=$n-$i;$k>=1;--$k)
	{
		echo KONGGE;
	}
	for($j=1;$j<=$i*2-1;++$j)
	{
		if($j==1||$j==$i*2-1)
		{
			echo "*";
		}
		else
		{
			echo KONGGE;
		}
}
	echo "<br />";//一行结束输出<br/>换行
}

?>
</body>
</html>
