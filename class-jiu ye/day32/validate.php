<?php
header("Content-Type:text/html;charset=utf-8");
$dom = new DOMDocument('1.0','utf-8');
//载入
//强制加载外部DTD
$dom->validataOnParse = true;
$dom->load('hml.xml');
$body = $dom->getElementsByTagName("body")->item(0);
echo $body->nodeValue;

/*在默认情况下，对于外部的DTD而言，
我们的xml文档不会加载引用的外部DTD。
需要让xml文档强制加载外部DTD
其中属性的默认值是false，所有无法加载外部DTD。
如果使用属性，一定要写在load之前。
*/