<?php

//上传工具类
class Upload{
	private $_error; //存储当前错误信息
	//获取错误信息
	public function getError(){
		return $this->_error;
	}
	//定义这些属性，用来对上传文件的属性进行封装
	private $_upload_path; //上传的目录
	private $_prefix; //前缀
	private $_max_size; //最大尺寸
	private $_ext_list; //允许的后缀列表
	private $_mime_list; //允许的MIME列表

	public function setUploadPath($upload_path){
		//不允许将不存在的目录设置为上传目录
		if(is_dir($upload_path)){  //如果是一个目录
			$this->_upload_path = $upload_path; //为上传的目录属性赋值
		}else{
			trigger_error('上传目录设置失败，采用默认'); //触发错误
		}
	}
	//这里提供修改这些配置属性的方法
	public function setPrefix($prefix){
		$this->_prefix = $prefix;
	}
	public function setMaxSize($max_size){
		$this->_max_size = $max_size;
	}
	public function setExtList($ext_list){
		$this->_ext_list = $ext_list;
		$this->_setMIMEList($ext_list); //调用函数，完成映射查找
	}

	//通过构造方法，对属性进行默认初始化
	public function __construct(){
		$this->_upload_path = './';
		$this->_prefix = '';
		$this->_max_size = array('.jpg','.gif','.png','.jpeg');
		$this->_setMIMEList($this->_ext_list);
	}
	//定义一个数组，显示后缀名和MIME的关系
	//要求用户指定 后缀名，我们帮着推算出来mime
	private $_ext_mime = array(
		'.jpeg' => 'image/jpeg',
		'.jpg' => 'image/jpeg',
		'.png' => 'image/png',
		'.gif' => 'image/gif',
	);
	private function _setMIMEList($ext_list){
		$mime_list = array();
		//遍历允许的后缀名列表，获得后缀名
		foreach($ext_list as $ext){
			$mime_list[] = $this->_ext_mime[$ext];
		}
		//赋值到MIME列表属性上！
		$this->_mime_list = $mime_list;
	}

	/**
	 * 文件上传（业务逻辑判断）函数
	 * 一次上传（判断）一个文件
	 * @param array $file_info 某个临时上传文件的5个信息，由$_FILES中获得！
	 * @return string:成功，目标文件名；false: 失败
	 */
	 function uploadFile($file_info){  //上传文件函数
		if($file_info['error'] != 0){
			$this->_error = '上传文件存在错误';
			return false;
		}
		//判断文件类型
		$ext_list = $this->_ext_list; //允许的后缀名列表
		$ext = strrchr($file_info['name'],'.');
		if( !in_array($ext,$ext_list)){
			$this->_error = '类型，后缀不合法';
			return false;
		}
		//MIME
		$mime_list = $this->_mime_list; //允许的MIME列表
		if( !in_array($file_info['type'],$mime_list)){
			$this->_error = '类型，MIME不合法';
			return false;
		}
		//PHP检测MIME
		$finfo = new Finfo(FILEINFO_MIME_TYPE);
		$mime_type = $finfo->file($file_info['tmp_name']);
		if( !in_array($mime_type,$mime_list)){
			$this->_error = '类型，PHP检测MIME不合法';
			return false;
		}
		//判断大小
		$max_size = $this->_max_size; //允许最大尺寸
		if($file_info['size'] > $max_size){
			$this->_error = '文件过大';
			return false;
		}
		//设置目标文件地址
		//上传目录
		$upload_path = $this->_upload_path;
		//采用子目录存储
		//获取当前需要的子目录名(目录/小时)
		$sub_dir = date('Ymdh') . '/';
		if( ! is_dir($upload_path . $sub_dir)){
			//不存在，创建
			mkdir($upload_path . $sub_dir);
		}
		//设计目标文件名
		$prefix = ''; //前缀
		$dst_name = uniqid($prefix,true) . $ext;  //使用uniqid()函数增加唯一性
		//是否为HTTP上传文件的检测
		if( !is_upload_file($file_info['tmp_name'])){
			$this->_error = '不是HTTP上传的临时文件';
			return false;
		}
		//移动，Move_uploaded_file(临时文件地址，目标文件地址);
		if(move_uploaded_file($file_info['tmp_name'],$upload_path . $sub_dir . $dst_name)){
			//移动成功
			return $sub_dir . $dst_name; //仅仅返回上传目录之后的地址即可
		}else{
			$this->_error = '移动失败';
			return false;
		}
	 }
	 

}