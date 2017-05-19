<?php
class DB{
	private static $instance;
	private $localhost;
	private $username;
	private $password;
	private $link;
	private function __construct(){
		$this->localhost = '127.0.0.1';
		$this->username = 'root';
		$this->password = 'root';
	}
	public static function getInstance(){
		if(!self::$instance instanceof self){
			self::$instance = new self();
		}
		return self::$instance;
	}
	public function connect($sql){
		$this->link = mysql_connect($this->localhost,$this->username,$this->password);
		mysql_select_db('shop');
		$res = mysql_query($sql);
		while($row = mysql_fetch_array($res)){
			$arr[] = $row;
		}
		return $arr;
	}
}
$sql = "select * from jx_admin";
$res = DB::getInstance()->connect($sql);
var_dump($res);