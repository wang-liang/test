<?php
/*
if($file_info['error'] != 0){
	echo '上传文件存在错误';
	return false;
}
$ext_list = array('.jpg','.png','.gif','.jpeg');
$ext = strrchr($file_info['name'],'.');
if(!in_array($ext,$ext_list)){
	echo '类型后缀不合法';
}
$mime_list = array('image/jpeg','image/png','image/gif','image/jpg');
if(!in_array($file_info['type'],$mime_list)){
	echo '类型MIME不合法';
	return false;
}
$max_size = 500*1024;
if($file_info['size'] > $max_size){
	echo '文件过大';
	return false;
}
$path = 'F:/myinfo/day23/abc';
$result = mkdir($path);var_dump($result);

//设置目标文件地址
$upload_path = '/';
$sub_dir = date('YmdH') . '/';
if(!is_dir($upload_path . $sub_dir)){
	mkdir($upload_path . $sub_dir);
}
//move_uploaded_file('临时目录文件','目标目录文件')
$upload_path = './';  //临时目录文件	
$sub_dir = date('YmdH') . '/'; //按日期创建的子目录
$dst_name = uniqid($prefix,true) . $ext; //目标文件名

if(move_uploaded_file($file_info['tmp_name'],$upload_path . $sub_dir . $dst_name)){
	return $sub_dir . $dst_name; //返回上传目录之后的地址
}
$file = './hack.txt.jpg';  //要获取类型的文件
$finfo = new Finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo->file($file); //调用Finfo中的file()方法
echo $mime_type;

$finfo = new Finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo->file($file_info['tmp_name']); //要获取的临时目录下的文件
if(!in_array($mime_type,$mime_list)){
	echo '类型不合法';
	return false;
}

if(!is_uploaded_file($file_info['tmp_name'])){
	echo '不是HTTP上传的临时文件';
	return false;
}

*/
/****************************************************/
//获取目录内容
//句柄 = opendir(目录地址);
$path = 'F:/myinfo/day23';
$handle = opendir($path);
var_dump($handle);

$filename = readdir($handle);
echo $filename,'<br />';
while(false !== ($filename = readdir($handle))){
	if($filename == '.' || $filename == '..') continue;
		echo $filename,'<br>';
}
