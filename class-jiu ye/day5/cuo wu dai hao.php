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
function GetBinStr($e){
$s = decbin($e);//这是一个二进制数字字符串
//str_pad函数的作用是：
//将字符串$str1,用字符串$str2填充到指定的长度n,
//而且可以指定填充的位置w：左边填充还是右边填充
$s1 = str_pad($s,16,"0",STR_PAD_LEFT);
return $s1;
}
echo "<pre>";
echo "<br />E_ERROR=" . E_ERROR . ",\t\t其对应的二进制值为：" . GetBinStr(E_ERROR);
echo "<br />E_WARNING=" . E_WARNING . ",\t\t其对应的二进制值为：" . GetBinStr(E_WARNING);
echo "<br />E_NOTICE=" . E_NOTICE . ",\t\t其对应的二进制值为：" . GetBinStr(E_NOTICE);
echo "<br />E_USER_NOTICE=" . E_USER_NOTICE . ",\t其对应的二进制值为：" . GetBinStr(E_USER_NOTICE);
echo "<br />E_ALL=" . E_ALL . ",\t\t其对应的二进制值为：" . GetBinStr(E_ALL);
echo "</pre>";
?>
</body>
</html>
