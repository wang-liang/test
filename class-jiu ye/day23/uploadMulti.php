<?php
function uploadMulti($file_list){
	//遍历，其中的name原色，得到下标
	foreach($file_list['name'] as $key=>$v){
		//利用下标获得对应的5个元素值
		//$file_info每个文件的信息
		$file_info['name'] = $file_list['name'][$key];
		$file_info['type'] = $file_list['type'][$key];
		$file_info['tmp_name'] = $file_list['tmp_name'][$key];
		$file_info['error'] = $file_list['error'][$key];
		$file_info['size'] = $file_list['size'][$key];

		//上传该文件即可
		//并存储每个文件的上传结果，与$key对应
		$result_list[$key] = uploadFile($file_info);
	}
	//返回上传结果
	return $result_list;
}

$result = uploadMulti($_FILES['goods_image']);
var_dump($result);

