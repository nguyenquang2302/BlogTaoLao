<?php
class cartdetail extends Model 
{
	public $table='cartdetails';
	public $primary_key='cart_id';
	public function add($postData)
	{
	 	return db_insert($this->table, $postData);
	}
	public function getbykey($key) 
	{
        $sql = "SELECT `products`.*,`cartdetails`.* FROM `{$this->table}`,`products` WHERE `products`.`product_id`=`cartdetails`.`product_id` and `cartdetails`.`cart_id`=".$key; 
        $rows = db_get_all($sql);
        return isset($rows) ? $rows : false;
    }
    
}
?>