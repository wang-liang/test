<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
	//第一步: 判断是不是由http上传的,判断临时文件
	if(!is_uploaded_file($_FILES['upload']['tmp_name'])){
		exit('非法上传');
	}
	//第二步: 对错误的判断
	if($_FILES['upload']['error'] != 0){
		exit('上传有错误,请重新上传');
	}
	//第三步:对文件的mime类型进行判断,
	//假设本站,只要求用户 jpg(image/jpeg), png(image/png). 
	$arr = array('image/jpeg','image/png');
	$fs = finfo_open(FILEINFO_MIME_TYPE); //通过PHP扩展,得到一个mime的资源
	//使用finfo_file返回上传的临时文件的文件类型.
	$mime  = finfo_file($fs,$_FILES['upload']['tmp_name']);
	//通过in_array来判断是否包含mime类型
	if(!in_array($mime, $arr)){
		exit('文件类型不符合要求');
	}
	//第四步: 获取文件的扩展名
	$index =  strrpos($_FILES['upload']['name'], '.');
	$ext = substr($_FILES['upload']['name'], $index); //从$index开始截取,直到最后
	
	//第五步: 判断文件大小
	if($_FILES['upload']['size'] > 2*1024*1024){
		exit('文件过大,请重新上传');
	}
	//第六步:临时文件
	$filename = $_FILES['upload']['tmp_name'];
	//第七步: 构建目标目录及文件名
	$path = './upload';
	//创建一个目录
	@mkdir($path);
	//构建指定的路径及文件名
	$file = $path."/".uniqid().$ext;
	if(!move_uploaded_file($filename, $file)){
		exit('上传失败');
	}
	//下面开始添加水印：
	$create_array = array(
		'image/jpeg' => 'imageCreateFromJpeg',
		'image/gif' => 'imageCreateFromGif',	
		'image/png' => 'imageCreateFromPng',
	);
	$save_array = array(
		'image/jpeg' => 'imageJpeg',
		'image/gif' => 'imageGif',	
		'image/png' => 'imagePng',	
	);
	$imageInfo = getimagesize($file);	//获得一个图片的一些信息，包括宽高，类型
	//上一行得到信息类似这样：Array ( [0] => 1284 [1] => 638 [2] => 2 [3] => width="1284" height="638" [bits] => 8 [channels] => 3 [mime] => image/jpeg )
	//print_r($imageInfo);
	$type = $imageInfo['mime'];	//它是类似这样一个字符串：'image/jpeg';
	$create_func = $create_array[$type];	//就是上述3个create函数名之一
	$target_img = $create_func($file);		//这就是要添加水印的图的画布
	$source_img = imageCreateFromPng('./itcast.png');//水印图是明确的文件
	$water_path = "./upload/water/";		//设定水印保存位置
	/*
	imageCopyMerge(
		$待增加水印图片画布即目标画布, $水印图片画布即源画布， 
		目标位置X，目标位置Y，水印画布采样区域位置X，水印画布采样区域位置Y, 
		水印画布采样区域宽，水印画布采样区域高，
		透明度）
	*/
	$water_w = imagesx($source_img);	//水印图宽
	$water_h = imagesy($source_img);	//水印图高
	$target_px = $imageInfo[0] - $water_w;	//大图宽减去小图（水印图）宽
	$target_py = $imageInfo[1] - $water_h;	//大图高减去小图（水印图）高
	imageCopyMerge(
		$target_img, $source_img,
		$target_px, $target_py, 0,0,
		$water_w, $water_h,
		50);
	//然后才去生成文件：
	$save_func = $save_array[$type];	//就是上述3个save函数名之一
	$file_name = basename($file);	//得到纯文件名（不含路径），比如：'abc.gif'
	$target_file = $water_path . 'water_' . $file_name;
	$save_func($target_img, $target_file);

}
?>
<form  action=""  method="post" enctype="multipart/form-data">
	<input type="file" name="upload" />
	<br />
	<input type="submit" name="submit" value="添加水印" />
</form>
</body>
</html>
