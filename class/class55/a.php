<?php

echo 123;

//header("location:itcast.php");

//header("refresh:3;url=itcast.php");

header("Expires:-1");  //设置过期时间
header("Cache-Control:no-cache");  //强制页面不缓存
header("Pragma:no-cache"); 
//关于Pragma:no-cache，跟Cache-Control: no-cache相同。Pragma: no-cache兼容http 1.0 ，Cache-Control: no-cache是http 1.1提供的。因此，Pragma: no-cache可以应用到http 1.0 和http 1.1，而Cache-Control: no-cache只能应用于http 1.1.