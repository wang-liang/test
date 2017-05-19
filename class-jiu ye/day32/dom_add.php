<?php
//[需求]：追加一本书
$dom = new DOMDocument('1.0','utf-8');
//载入
$dom->load('bookstore.xml');
//创建各个节点
$newbook = $dom->createElement('book');
$newtitle = $dom->createElement('title','php学习宝典');
$newauthor = $dom->createElement('author','wang');
$newyear = $dom->createElement('year',2016);
$newprice = $dom->createElement('price',199);
//追加节点
$newbook->appendChild($newtitle);
$newbook->appendChild($newauthor);
$newbook->appendChild($newyear);
$newbook->appendChild($newprice);
//将newbook追加到根目录，documentElement就表示根节点
$dom->documentElement->appendChild($newbook);
//增加属性
$newbook->setAttribute('category','IT');
$newtitle->setAttribute('lang','中文');
//保存
$dom->save('add_book.xml');
