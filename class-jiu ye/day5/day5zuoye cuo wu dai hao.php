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
//定义一个数组(php中的数组)
$arr = Array("E_ERROR", "E_WARNING", "E_PARSE", "E_NOTICE", "E_CORE_ERROR", "E_CORE_WARNING", "E_COMPILE_ERROR", "E_COMPILE_WARNING", "E_USER_ERROR", "E_USER_WARNING", "E_USER_NOTICE","E_STRICT","E_ALL");
?>
<table border='1' rules="all">
	<tr>
		<td>错误代号（常量）</td>
		<td>十进制值</td>
		<td>二进制值</td>
	</tr>
	<?php for($i=0;$i<count($arr);$i++){?>
	<tr>
		<td><?php echo $arr[$i];?></td>
		<td><?php echo constant($arr[$i]);?></td>
		<!--$str_pad($s,16,"0",STR_PAD_LEFT)函数的作用是：-->
		<!--将字符串$str1用字符串$str填充到指定的长度n，-->
		<!--而且可以指定填充的位置w：左填充或右填充-->
		<td><?php echo str_replace(1,"<font color='red'>1</font>",str_pad(decbin(constant($arr[$i])),16,"0",STR_PAD_LEFT));?></td>
	</tr>
	<?php }?>
</table>

</body>
</html>
