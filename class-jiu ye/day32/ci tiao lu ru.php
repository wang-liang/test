<?php
$dom = new DOMDocument('1.0','utf-8');
$dom->load(dic.xml);
//处理过程
$words = $dom->getElementsByTagName('word');
foreach ($words as $word){
	echo $word->nodeValue;
}
?>