
<?php
class product extends Model 
{
	public $table='products';
	public $primary_key='product_id';
	public function TOPID()
	{
		$sql = "SELECT * FROM `products` ORDER BY `product_id` desc Limit 1";
		$rows = db_get_all($sql);
        return isset($rows[0]) ? $rows[0] : 0;

	}
	public function add($postData)
	{
	 	return db_insert($this->table, $postData);
	}
	public function update($postData,$key)
	{
	 	$where ="product_id=".$key;

	 	return db_update($this->table, $postData,$where);
	}
}