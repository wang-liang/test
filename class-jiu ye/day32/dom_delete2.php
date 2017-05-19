<?php
//[需求1]：删除所有书籍的year元素
$dom = new DOMDocument('1.0','utf-8');
//载入
$dom->load('bookstore1.xml');
$years = $dom->getElementsByTagName('year');//找到所有的year节点
/*
//循环删除之
foreach ($years as $year){
	$year->parentNode->removeChild($year);
}
*/
//第一步，保存所有找到的year节点
$temp = array();
foreach ($years as $year){
	$temp[] = $years;
}
//第二步，对temp进行删除
foreach ($temp as $v){
	$v->parentNode->removeChild($v);	
}
//保存
$dom->save('delete2_book.xml');

//在删除节点的同时，进行了foreach操作，导致结果出现紊乱。
//[注意]，在删除节点的同时，不要对他进行foreach操作