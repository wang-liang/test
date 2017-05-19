<?php
class ProductController extends BaseController{
	function showAllProductAction(){  //显示所有商品
		$obj = ModelFactory::M('ProductModel');
		$rec = $obj->showAllProduct();
		include VIEW_PATH . 'showAllProduct.html';
	}
	function DelAction(){   //删除商品
		$id = $_GET['id'];
		$obj = ModelFactory::M('ProductModel');
		$rec = $obj->DelProductById($id);
		$this->GotoUrl('删除商品成功！','?p=front&c=Product&a=showAllProduct',2);  //跳转
	}
}