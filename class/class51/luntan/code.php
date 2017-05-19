<?php
header("Content-Type:text/html;charset=utf-8");
//(0)声明变量
$filename	= './code.png';
$imgWidth	= 0;
$imgHeight	= 0;
$fontsize	= 24;
$fontfile	= './Candarai.ttf';
$str		= "";
//(1)生成随机四个字符串
$arr_list = array_merge(range('A','Z'),range(0,9));
$arr_index = array_rand($arr_list,4);
foreach($arr_index as $value)
{
	$str .= $arr_list[$value];
}
//将验证码存入SESSION
session_start();
$_SESSION['code'] = $str;
//(2)从已有图像创建，并分配颜色
$img = imagecreatefrompng($filename);
$imgWidth = imagesx($img);
$imgHeight = imagesy($img);
$textcolor = imagecolorallocate($img,mt_rand(0,200),mt_rand(0,200),mt_rand(50,100));
//(3)写入字符串
imagettftext($img,$fontsize,0,10,26,$textcolor,$fontfile,$str);
//(4)输出图像
header("Content-Type:image/png");
imagepng($img);
imagedestroy($img);
?>