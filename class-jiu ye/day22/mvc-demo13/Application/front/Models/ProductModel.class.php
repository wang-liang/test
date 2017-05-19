<?php
//require './BaseModel.class.php'; 
//已经在index.php中加载，这行不要
class ProductModel extends BaseModel{
	function GetAllProduct(){
		//显示产品所有信息，
		$sql = "select product.*,protype_name from product inner join product_type as t on product.protype_id=t.protype_id";
		return $this->db->getRows($sql);
	}
	function DelProductById($id){
		$sql = "delete from product where pro_id = '$id'";
		return  $this->db->exec($sql);
	}
}