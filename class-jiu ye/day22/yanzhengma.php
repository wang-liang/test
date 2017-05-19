<?php
//处理码值
//将所有可能的字符，整理
$char_list = 'ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
$char_list_len = strlen($char_list);
$code_len = 4; //4个字符
$code = ''; //初始化码值字符串
for($i=1;$i<=$code_len;++$i){
	//随机下标
	$rand_index = mt_rand(0,$char_list_len-1);
	//字符串支持下标操作$str[0] 表示第一个字节字符
	$code .= $char_list[$rand_index];
}

//存储于session中
session_start();
$_SESSION['code'] = $code;
//处理验证码图片
$bg_file = './captcha/captcha_bg' . mt_rand(1,5) . '.jpg';
//创建画布
$image = imagecreatefromjpeg($bg_file);
//操作画布
//分配字符串颜色
//imagecolorallocate(画布，R,G,B);

//随机分配白或者黑
if(mt_rand(1,2) == 1){
	$str_color = imagecolorallocate($image,255,255,255);//白
}else{
	$str_color = imagecolorallocate($image,0,0,0); //黑
}
//将字符串写到画布上
//imagestring(画布，字体大虾，位置X，位置Y，字符串内容，颜色)；
//计算图片宽高
$image_w = imagesx($image);
$image_h = imagesy($image);
//字符串
$font = 5;
//计算字体的宽高
$font_w = imagefontwidth($font);
$font_h = imagefontheight($font);
//字符串的宽高
$str_w = $font_w * $code_len;
$str_h = $font_h;
//位置
$x = ($image_w- $str_w)/2;
$y = ($image_h-$str_h)/2;
imagestring($image,$font,$x,$y,$code,$str_color);

//输出
header('Content-Type:image/jpeg');
imagejpeg($image);

//销毁
imagedestroy($image);
