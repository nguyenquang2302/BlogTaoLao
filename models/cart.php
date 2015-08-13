<?php
class cart extends Model 
{
	public $table='carts';
	public $primary_key='cart_id';
	public function add($postData)
	{
	 	return db_insert($this->table, $postData);
	}
	public function getall() 
	 {
        $sql = "SELECT `users`.*,`carts`.* FROM `{$this->table}`,`users` WHERE `users`.`id`=`carts`.`user_id`";
 
        $rows = db_get_all($sql);
    
        return isset($rows) ? $rows : false;
    }
}
?>