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
if(!empty($_POST))
{
	$data1 = $_POST['data1'];
	$fuhao = $_POST['fuhao'];
	if($fuhao==1)
	{
		$jieguo = decbin($data1);
	}
	else if($fuhao==2)
	{
		$jieguo = decoct($data1);
	}
	else if($fuhao==3)
	{
		$jieguo = dechex($data1);
	}
	else if($fuhao==4)
	{
		$jieguo = bindec($data1);
	}
}
else
{
	$data1="";
	$fuhao="1";
	$jieguo="";
}
?>
<form name="form1" method="post">
	数<input type="text" name="data1" value="<?php echo $data1;?>">
	<select name="fuhao">
		<option value="1" <?php if($fuhao==1){echo "selected='selected'";}?>>10to2</option>
		<option value="2" <?php if($fuhao==2){echo "selected='selected'";}?>>10to8</option>
		<option value="3" <?php if($fuhao==3){echo "selected='selected'";}?>>10to16</option>
		<option value="4" <?php if($fuhao==4){echo "selected='selected'";}?>>2to10</option>
	</select>
	<input type="submit" value="转换">
	<input type="text" name="result" value="<?php echo $jieguo;?>">
</form>
</body>
</html>
