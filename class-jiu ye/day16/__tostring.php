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
//__tostring()魔术方法-----比较常用
//将一个对象“当作”一个字符串来使用的时候，会自动调用该方法

class A{
	public $name;
	public $age;
	public $edu;
	function __construct($name,$age,$edu){
		$this->name = $name;
		$this->age = $age;
		$this->edu = $edu;
	}
	function __tostring(){
		$str = "姓名：" . $this->name;
		$str .= "年龄：" . $this->age;
		$str .= "学历："  . $this->edu;
		return $str;
		//这里可以返回“任何字符串内容”
		//比如这样：return $this->name
	}
}
$obj1 = new A('张三',18,'大学');
//var_dump($obj1);
echo $obj1; //当字符串使用，此时会自动调用魔术方法

?>
</body>
</html>
