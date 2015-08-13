<?php
class comment extends Model 
{
	public $table='comments';
	public $primary_key='id';
	public function getbykey($value, $field = null) 
	{
		if ($field === null) {
			$field = $this->primary_key;
		}
		$sql = "SELECT * FROM `{$this->table}` WHERE `{$field}` = " . esc($value);
		$rows = db_get_all($sql);	
		return isset($rows) ? $rows : false;
	}
	public function getBy($value, $field = null) 
	{
		if ($field === null) {
			$field = $this->primary_key;
		}      
		$sql = "SELECT `{$this->table}`.*,`posts`.`Title` FROM `{$this->table}`,`posts` WHERE `{$this->table}`.`{$field}` = " . esc($value) . " and `{$this->table}`.`{$field}`= `posts`.`post_id`";
		$rows = db_get_all($sql);

		return isset($rows) ? $rows : false;
	}
	public function delete ($key)
	{
		$where =$this->primary_key."=".$key;
		return db_delete($this->table,$where);
	}
	public function add($postData)
	{
		return db_insert($this->table, $postData);
	}
}
?>