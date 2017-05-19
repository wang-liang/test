<?php
/*
session_start();
echo '<pre>';
class Student{
	private $_name;
	public function __construct($n){
		$this->_name = $n;
	}
}
$_SESSION['object'] = new Student('张三');
var_dump($_SESSION);
*/




ini_set('session.cookie_lifetime','3600');
ini_set('session.cookie_damain','.kang.com');


//判断过期条件：Last_write < 当前时间-1440

//如何删除
//调整几率测试
//建议在脚本周期调整，使用函数ini_set()，在开启session机制前完成：
//设置
ini_set('session.gc_probability','1');
ini_set('session.gc_divisor','1');

//session_set_cookie_params(有效期，有效路径，有效域，是否仅安全连接传输，是否HTTPONLY);
//只更改域名
//session_set_cookie_params(0,'/','.kang.com');
/**
*
*@return [type][description]
*
*/

function sessRead($sess_id){
	echo '<br />READ</br>';
	//连接数据库服务器
	mysql_connect('127.0.0.1:3306','root','root');
	mysql_query('set names utf8');
	mysql_query('use php39');

	//执行读select操作
	$sql = "select sess_content from session where sess_id='$sess_id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_saaoc($result);
	if($row){
		return $row['sess_content'];
	}else{
		return '';
	}
}

function sessWrite($sess_id,$sess_content){
	echo '<br />WRITE</br>';
	//连接数据库服务器
	mysql_connect('127.0.0.1:3306','root','root');
	mysql_query('set names utf8');
	mysql_query('use php39');
	//执行写操作
	$sql = "replace into session values('$sess_id','$sess_content')";
	return mysql_query($sql);

}

function sessDelete($sess_id){
	echo '<br />DELETE</br>';
	//连接数据库服务器
	mysql_connect('127.0.0.1:3306','root','root');
	mysql_query('set names utf8');
	mysql_query('use php39');
	//删除操作
	$sql = "delete from session where sess_id='$sess_id'";
	return mysql_query($sql);
}
function sessGC($maxlifetime){
	echo '<br>GC<br>';
	//连接数据库服务器
	mysql_connect('127.0.0.1:3306','root','root');
	mysql_query('set names utf8');
	mysql_query('use php39');
	//最后写入时间 < 当前时间-最大有效期
	$sql = "delete from session where last_write < unix_timestamp()-$maxlifetime";
	return mysql_query($sql);
}
function sessBegin(){
	echo '<br>BEGIN<br>';
	//连接数据库服务器
	mysql_connect('127.0.0.1:3306','root','root');
	mysql_query('set names utf8');
	mysql_query('use php39');
}
function sessEnd(){
	echo '<br>END<br>';
	return true;
}
/*
function sessWrite($sess_id,$sess_content){
	echo '<br>WRITE<br>';
	//连接数据库服务器
	mysql_connect('127.0.0.1:3306','root','root');
	mysql_query('set names utf8');
	mysql_query('use php39');
	//执行与操作
	//利用sess_id判断是否已经存在该记录，存在则update,不存在则insert
	//replace into:如果主键存在，则替换，否则插入
	$sql = "replace into session values ('$sess_id','$sess_content',unix_timestamp())";
	return mysql_query($sql);
}
*/

//设置session存储处理器函数
session_set_save_handler(
	'sessBegin','sessEnd','sessRead','sessWrite','sessDelete','sessGC'
);
@session_start();



/*
//@session_start();
$_SESSION['key'] = 'value';
//销毁session
session_destroy();
*/
?>