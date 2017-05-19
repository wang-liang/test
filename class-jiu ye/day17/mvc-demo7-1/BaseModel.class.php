<?php
require './MySQLDB.class.php';

class BaseModel{
	protected $db = null;
	function __construct(){
		$config = array(
		'host'=>"localhost",
		'port'=>3306,
		'user' => "root",
		'pass' => "root",
		'charset' => "utf8",
		'dbname' => "php39"
		);

		$this->db = MySQLDB::GetInstance($config);
	}
}