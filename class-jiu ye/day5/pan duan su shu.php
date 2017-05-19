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
$count = 0;
if(!empty($_POST))
{
	$n = $_POST['data1'];
	for($i=2;$i<=$n;$i++)
	{
		$count++;
	}
	if($count==2)
		{
			echo "{$data1}是素数";
		}
		else
		{
			echo "{$data1}不是素数";	
		}	
}
?>
<form method="post" name="form1">
	<input type="text" name="data1">
	<input type="submit" value="提交">
</form>
</body>
</html>
