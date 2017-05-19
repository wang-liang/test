<?php

$exists_name = array('mary','jack','linken','bider');

//print_r($_GET);
$name = $_GET['name'];
//判断用户名输入是否存在
if(in_array($name,$exists_name)){
	echo "被占用";
}else{
	echo "可以使用";
}