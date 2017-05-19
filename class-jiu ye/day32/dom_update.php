<?php
//[需求]：所有的书籍打两折
$dom = new DOMDocument('1.0','utf-8');
//载入
$dom->load('bookstore.xml');
//具体处理
$prices = $dom->getElementsByTagName('price');
//使用for循环
/*
for($i = 0,$len = $price->length;$i < $len;$i++){
	$prices->item($i)->nodeValue *= 0.2;
}
*/
//使用foreach循环，推荐这种方式
foreach ($prices as $price){
	$price->nodeValue *= 0.2;
}
//保存
$dom->save('update_book.xml');
