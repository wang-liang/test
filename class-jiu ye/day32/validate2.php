<?php
header('Content-Type:text/html;charset=utf-8');
$dom = new DOMDocument('1.0','utf-8');
//载入
@$dom->load('hml.xml');
if(@$dom->validate()){
	echo "yes";
}else{
	echo "no";
}