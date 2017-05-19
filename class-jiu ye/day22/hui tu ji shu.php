<?php
//创建画布
$width = 500;
$height = 250;
$image = imagecreatetruecolor($width,$height);

//操作画布
//分配颜色
$blue = imagecolorallocate($image,0,0,255); // 0,0,0xff(16进制)
imagefill($image,0,0,$blue);
//imagefill($image,$width-1,$height-1,$blue);
imagepng($image,'./blue.png');  //在指定路径下输出
header('Content-type: image/png');
imagepng($image);  //直接在网页输出

//销毁资源
imagedestroy($image);

