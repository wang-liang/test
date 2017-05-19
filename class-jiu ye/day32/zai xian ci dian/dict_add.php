<?php
$word = $_POST['word'];
$explain = $_POST['explain'];
$eg = $_POST['eg'];
//实例化dom对象
$dom = new DOMDocument('1.0','utf-8');
if(file_exists('dict.xml')){
	//存在，字节获取根节点
	$dom->load('dict.xml');
	$root = $dom->documentElement;
}else{
	//不存在，创建一个根节点
	$cetsix = $dom->createElement('cetsix');
	$root = $dom->appendChild($cetsix);
}
//创建并追加word节点
$wordnode = $dom->createElement('word');
$namenode = $dom->createElement('name',$word);
$meannode = $dom->createElement('mean',$explain);
$lxnode = $dom->createElement('xl',$eg);
$wordnode->appendChild($namenode);
$wordnode->appendChild($meannode);
$wordnode->appendChild($lxnode);
$root->appendChild($wordnode);
//保存
$dom->save('dict.xml');






