<?php

//给一个文件追加内容
$fp = fopen("./02.txt","a");

fwrite($fp,'php0710');   //给文件追加写入内容

fclose($fp);   //关闭文件