
<?php
/*
设计一个类：mysql数据库操作类
设计目标：
1，该类一实例化，就可以自动连接上mysql数据库；
2，该类可以单独去设定要使用的连接编码（set  names  XXX）
3，该类可以单独去设定要使用的数据库（use  XXX）；
4，可以主动关闭连接；
*/

class MysqlDB{
	public $link = null;//用于存储连接成功后的“资源”
	//定义一些属性，以存储连接数据库的6项基本信息
	private $host;
	private $port;
	private $user;
	private $pass;
	private $charset;
	private $dbname;
	function __construct($config){ //
		//先将这些基本的连接信息，保存起来！
		$this->host = !empty($config['host']) ? $config['host'] :"localhost"; //考虑空值情况，使用默认值代替
		$this->port = !empty($config['port']) ? $config['port'] :"port";
		$this->user = !empty($config['user']) ? $config['user'] :"3306";
		$this->pass = !empty($config['pass']) ? $config['pass'] :"root";
		$this->charset = !empty($config['charset']) ? $config['charset'] :"utf8";
		$this->dbname = !empty($config['dbname']) ? $config['dbname'] :"php39";

		//然后连接数据库
		$this->link = @mysql_connect("{$this->host}:{$this->port}","{$this->user}","{$this->pass}") or die("连接失败");
		//设定编码
		//mysql_query("set names {$config['charset']}");
		$this->setCharset($this->charset);//这一行代替上一行
		//选定要使用的数据库名
		//mysql_query("use {$config['dbname']}");
		$this->selectDB($this->dbname);//这一行代替上一行
	}
	//可以设定要使用的连接编码
	function setCharset($charset){
		mysql_query("set names $charset");
	}
	//可以设定要使用的数据库
	function selectDB($dbname){
		mysql_query("use $dbname");
	}
	//可以关闭连接
	function closeDB(){
		mysql_close($this->link);
	}

	//这个方法为了执行一条增删改语句，它可以返回真假结果
	function exec($sql){
		$result = mysql_query($sql);
		if($result === false)
		{
			//语句执行失败，则需要处理这种失败情况：
			echo "<p>sql语句执行失败，请参考如下信息：";
			echo "<br />错误代号：" . mysql_errno();
			echo "<br />错误信息：" . mysql_error();
			echo "<br />错误语句：" . $sql;
			die();
		}
		return true;
	}


	//这个方法为了执行一条返回一行数据的语句，它可以返回一维数组
	//数组的下标，就是sql语句中的取出的字段名；
	function GetOneRow($sql){
		$result = mysql_query($sql);
		if($result === false){
			//语句执行失败，则需要处理这种失败情况：
			echo "<p>sql语句执行失败，请参考如下信息：";
			echo "<br />错误代号：" . mysql_errno();
			echo "<br />错误信息：" . mysql_error();
			echo "<br />错误语句：" . $sql;
			die();
		}
		//如果没有出错，则开始处理数据，以返回数组。此时$result是一个结果集
		$rec = mysql_fetch_assoc($result); //取出第一行数据（其实应该只有这一行）
		return $rec;
	}


	//这个方法为了执行一条返回多行数据的语句，它可以返回二维数组
	function GetRows($sql){
		$result = mysql_query($sql);
		if($result === false)
		{
			//语句执行失败，则需要处理这种失败情况：
			echo "<p>sql语句执行失败，请参考如下信息：";
			echo "<br />错误代号：" . mysql_errno();
			echo "<br />错误信息：" . mysql_error();
			echo "<br />错误语句：" . $sql;
			die();		
		}
		//如果没有出错，则开始处理数据，以返回数组。此时$result是一个结果集，且是（多行数据）
		$arr = array(); //空数组，用于存放要返回的结果数组（二维数组）
		while ($rec = mysql_fetch_assoc($result)){
			$arr[] = $rec; //此时，$arr就是一个二位数组了！
		}
		return $arr;
	}

	//这个方法为了执行一条返回一个数据的语句，它可以返回一个直接值
	//这条语句类似这样：select  count(*) as c  from  info
	function GetOneData($sql){
		$result = mysql_query($sql);
		if($result === false)
		{
			//语句执行失败，则需要处理这种失败情况：
			echo "<p>sql语句执行失败，请参考如下信息：";
			echo "<br />错误代号：" . mysql_errno();
			echo "<br />错误信息：" . mysql_error();
			echo "<br />错误语句：" . $sql;
			die();	
		}
		//如果没有出错，则开始处理数据，以返回一个数据！（可以理解为是一个数组）
		$rec = mysql_fetch_row($result);  //这里使用fetch_row这个函数，
										  //这里的$rec得到的仍然是一个数组
										  //只不过是一个(一行一列)的标量数据，类似这样
										  //array ( 0=> 5 );或者 array( 0=>'user1');

		$data = $rec[0]; //取出下标为0的数据，其实这里的$rec数组中只有一个下标为0的数据
		return $data;
	}

}


?>

