<?php

header("Content-type:text/html;charset=utf-8");
/*
 * 接收表单数据
 */
//获取表单get请求数据 get数据在URL中传输的
var_dump($_GET);
//获取表单POST请求数据 POST数据放在请求体中传输的
var_dump($_POST);
//使用file获取文件信息
var_dump($_FILES);
//查看请求的过来的原始数据 经过URL ENCODE
var_dump(file_get_contents("php://input"));//uname=liutian&password=123456
//要想PHP能够识别传输过来的数据格式 需要发送请求头 content-type
var_dump(apache_request_headers());
