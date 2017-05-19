<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>网页标题</title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css"></style>
<script type="text/javascript">

</script>
</head>

<body>
<?php
//接口中只能有抽象方法和类常量
interface Player{ //播放器接口
	function play(); //抽象方法
	function stop();
	function next();
	function prev();
}
class USBset{ //USB设备接口
	const USBWidth = 12; //usb接口宽度，单位毫米
	const USBHeight = 5; //usb接口宽度，单位毫米
	function dataIn(); //数据输入
	function dataOut(); //数据输出
}
//Mp3播放器，同时具有播放器功能，也具有USB设备的特征和功能
//则这里就可以从这2个接口获取其“特征信息”，并在其中实现它
class MP3Player implements Player,USBset{ //implements称为“实现”
	function play(){}  //实现该方法      //其本质和extends一样，就是“继承”
	function stop(){}  //实现该方法
	function next(){}  //实现该方法
	function prev(){}  //实现该方法
	function dataIn(){} //实现该方法
	function dataOut(){} //实现该方法
}


?>
</body>
</html>
