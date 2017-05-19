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
$n=4;
define("KONGGE","-");
/*************图形A********************/
for($i=1;$i<=$n;$i++)
{
	for($j=1;$j<=$n;$j++)
	{
		echo "*";
	}
	echo "<br />";
}
echo "<br />";
/**************图形B****************************/
for($i=1;$i<=$n;$i++)
{
	//输出一行*
	for($j=1;$j<=$i;$j++)
	{
		echo "*";
	}
	echo "<br />";
}
echo "<br />";

/**************图形C****************************/
for($i=1;$i<=$n;$i++)
{
	for($j=1;$j<=2*$i-1;$j++)
	{
		echo "*";
	}
	echo "<br/>";
}
echo "<br />";

/**************图形D****************************/
for($i=1;$i<=$n;$i++)
{
	for($k=$n-$i;$k>=1;$k--)
	{
		echo KONGGE;
	}
	for($j=1;$j<=2*$i-1;$j++)
	{
		echo "*";
	}
	echo "<br />";
}
echo "<br />";

/**************图形E****************************/
for($i=1;$i<=$n;$i++)
{
	for($k=$n-$i;$k>=1;$k--)
	{
		echo KONGGE;
	}
	for($j=1;$j<=2*$i-1;$j++)
	{
		if($j==1||($j==2*$i-1))
		{
			echo "*";
		}
		else
		{
			echo KONGGE;
		}
	}
	echo "<br/>";
}

echo "<br />";

/**************图形F****************************/

for($i=1;$i<=$n;$i++)
{
	for($k=$n-$i;$k>=1;$k--)
	{
		echo KONGGE;
	}
	for($j=1;$j<=2*$i-1;$j++)
	{
		if($i==$n)
		{
			echo "*";
		}
		else
		{
			if($j==1||$j==2*$i-1)
			{
				echo "*";
			}
			else
			{
				echo KONGGE;
			}
		}
	}
	echo "<br/>";
}

echo "<br />";

/**************图形F****************************/
for($i=1;$i<=$n;$i++)
{
	for($k=$n-$i;$k>=1;$k--)
	{
		echo KONGGE;
	}
	for($j=1;$j<=2*$i-1;$j++)
	{
		if($i==$n)
		{
			echo "*";
		}
		else
		{
			if($j==1||$j==2*$i-1)
			{
				echo "*";
			}
			else
			{
				echo KONGGE;
			}
			
		}
	}
	echo "<br/>";
}
for($i=$n-1;$i>=1;$i--)
{
	for($k=$n-$i;$k>=1;$k--)
	{
		echo KONGGE;
	}
	for($j=1;$j<=2*$i-1;$j++)
	{
		if($i==$n)
		{
			echo "*";
		}
		else
		{
			if($j==1||$j==2*$i-1)
			{
				echo "*";
			}
			else
			{
				echo KONGGE;
			}
			
		}
	}
	echo "<br/>";
}
?>
</body>
</html>
