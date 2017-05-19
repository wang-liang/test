<?php

$path = 'F:\myinfo\day23';
var_dump(is_dir($path));
$path = 'F:\myinfo\day23\abcde';
var_dump(is_dir($path));
//目录不存在，需要创建
$result = mkdir($path);
var_dump($result);

$file = './hack.txt.jpg';
//实例化一个可以获得文件MIME类型的对象$finfo
$finfo = new Finfo(FILEINFO_MIME_TYPE);
//利用对象，获得某个文件的mime类型
$mime_type = $finfo->file($file);

echo $mime_type;

