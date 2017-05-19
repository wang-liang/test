
<?php
/*
$str = "string";
echo $str = strrev($str);
//引用传递：函数外的变量被修改后，函数内部也会有影响
//值传递：函数外的变量被修改后，函数内部不发生影响
//error_reporting用于显示报告错误的级别
//mb_substr()

$arr = parse_url($url);
$path = basename($arr['path']);
$ext = explode('.',$path);
return $ext[count($ext)-1];

create table category(
	cat_id smallint unsigned not null auto_increment primary key comment '类别ID',
	cat_name varchar(30) not null default '' comment '类别名称',
	pid smallint unsigned not null default 0 comment '父类ID'
);

function tree($arr,$pid=0){
	static $list = array();
	foreach ($arr as $v){
		if($v['pid'] == $pid){
			$list[] = $v;
			tree($arr,$v['cat_id']);
		}
	}
}

preg_match('/^[\w\-\.]+@[\w\-]+(\.\w+)+$/',$email);

echo data('Y-m-d H:i:s',strtotime("-1 day"));
preg_match('/^[\w\-\.]+@[\w\-]+(\.\w+)+$/');
*/
/*
echo (strtotime("2014-01-09")-strtotime("2014-01-08"))/(3600*24);


function _sort($arr){
	$count = count($arr);
	for($i=0;$i<$count-1;$i++){
		for($j=0;$j<$count-1-$i;$j++){
			if($arr[$j] > $arr[$j+1]){
				$tmp = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $tmp;
			}
		}
	}
}
$str = "1,3,2,4,7,6,9";
$arr = explode(',',$str);
_sort($arr);
var_dump($arr);

$fp = fopen('./lock.txt','w+');
if(flock($fp,LOCK_EX)){
	fwrite($fp,"write something");
	flock($fp,LOCK_UN);
}else{
	echo "文件正在锁定中";
}
fclose($fp);

cat_id smallint auto_increment not null primary nusigned comment '',
cat_name varchar(30) not null default "" comment ""
function tree($arr,$pid=0,$level=0){
	static $list = array();
	foreach($arr as $v){
		if($v['parent_id'] == $pid){
			$v['level'] = $level;
			$list[] = $v;
			tree($arr,$v['cat_id'],$level+1);
		}
		return $list;
	}
}

//写5个函数来获取一个全路径的文件的扩展名
$path = str_replace('//','/',__FILE__);
function ext_name1($path){
	return strrchr($path,'.');
}
function ext_name2($path){
	return substr($path,strrpos($path,'.'));
}
function ext_name3($path){
	$path_parts = pathinfo($path);
	return $path_parts['extension'];
}
function ext_name4($path){
	$arr = explode('.',$path);
	return $arr[count($arr) - 1];
}
function ext_name5($path){
	$pattern = '/^[^\.]+\.([\w]+)$/';
	return preg_replace($pattern,'${1}',basename($path));
}

//PHP实现一个双向队列
class Deque{
	private $queue = array();
	public function addFirst($item){
		return array_unshift($this->queue,$item);
	}
	public function addLast($item){
		return array_push($this->queue,$item);
	}
	public function removeFirst($item){
		return array_shift($this->queue);
	}
	public function removeLast($item){
		return array_pop($this->queue);
	}
}
*/
/*
$str = '中华～‖したひな々人民共和そつ国';
//echo mb_strlen($str,'utf8');
echo mb_substr($str,0,mb_strlen($str,'utf8'),'utf8');

模板的特点（新浪网技术部）
速度快，编译型，缓存技术，插件机制，强大的表现逻辑 

抓取远程图片到本地,你会用什么函数?
file_get_contents或者curl 

$arr = array(1,2,4,7,2,9);
$arr1 = sort($arr);
echo $arr1;


$arr1 = array(1,2,3,4,5,6);
$arr2 = array('a','b','c','d','e','f');
foreach($arr1 as $k1 => $v1){	
	foreach($arr2 as $k2 => $v2){
		echo $v1 . "," . $v2;
}
}



$a = 'qijiayoudao';
$b = 'dao';
function trim1($a,$b){
	$arr1 = str_split($a);
	$arr2 = str_split($b);
	$arr = array_diff($arr1,$arr2);
	return $arr = implode('',$arr);
}
echo $str = trim1($a,$b);

*/
$str = "EDCBA";
for($i=4;$i>=0;$i--){
	$str[$i];
}
echo $str;



