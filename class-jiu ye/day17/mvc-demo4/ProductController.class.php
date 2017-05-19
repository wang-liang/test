<?php
header("content-type:text/html;charset=utf-8");
require './ProductModel.class.php';
require './ModelFactory.class.php';

class ProductController{
	function showAllProductAction(){
		//echo "aa";
		$obj = ModelFactory::M('productModel');
		$data = $obj->GetAllProduct(); //是一个二维数组
		include './Product_list.html';
	}
}

$ctrl = new ProductController();
$act = !empty($_GET['act']) ? $_GET['act'] : "Index";
$action = $act . "Action";
$ctrl->$action(); //可变函数---->>可变方法