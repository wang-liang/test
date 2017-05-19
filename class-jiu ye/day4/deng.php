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
define("D1",1);// 0000 0001
define("D2",2);// 0000 0010
define("D3",4);// 0000 0100
define("D4",8);// 0000 1000
define("D5",16);//0001 0000
$state = 3;  //   0000 0011
//$state = 4;  //   0000 0100
//echo $state & D1;
//echo $state & D2;
//echo $state & D3;

if(($state & D3) >0)  //0001    0010    0000
{					//0000	  0000	  0100	   0000
	echo "灯1亮";
}
else
{
	echo "灯1灭";
}

function showAll()
{
	echo "<p>";
	for($i=1;$i<=5;++$i)
	{
		$s = "D".$i;
		if($GLOBALS['state'] & constant($s)>0)
		{
			echo "灯{$i}亮";
		}
	}
	echo "</p>";
}

echo "<br />所有灯初始状态：";
showAll();

$state = $state | D1;
showAll();

$state = $state &(~D1);
showAll();

?>
</body>
</html>
