<?php
require './BaseModel.class.php';

class ProductModel extends BaseModel{
	function GetAllProduct(){
		//显示产品所有信息，
		$sql = "select product.*,protype_name from product inner join product_type as t on product.protype_id=t.protype_id";
		return $this->db->getRows($sql);
	}
}