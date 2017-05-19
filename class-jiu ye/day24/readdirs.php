<?php

$path = 'F:/saixin/';
readDirs($path);

function readDirs($path,$deep=0){
	static $file_list = array();
	$handle = opendir($path);
	while(false !== ($filename = readdir($handle))){
		//.,..直接跳过
		if($filename == '.' || $filename == '..') continue;
		$fileinfo['filename'] = $filename;
		$fileinfo['deep'] = $deep;
		$file_list[] = $fileinfo;                                      
		echo str_repeat('&nbsp;',$deep*4),$filename,'<br>';
		if(is_dir($path . '/' . $filename)){
			readDirs($path . '/' . $filename,$deep+1);
		}
	}
	closedir($handle);
	return $file_list;                                     
}


















