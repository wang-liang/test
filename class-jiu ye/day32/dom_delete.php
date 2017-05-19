<?php
//[需求1]：删除第二本书的year元素
$dom = new DOMDocument('1.0','utf-8');
//载入
$dom->load('bookstore.xml');
//删除操作
$year = $dom->getElementsByTagName('year')->item(1);//找第二个year元素
$year->parentNode->removeChild($year);//通过父节点删除之
//保存
$dom->save('delete1_book.xml');
