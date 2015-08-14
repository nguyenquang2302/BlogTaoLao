<?php
class Post extends Model 
{
	public $table='posts';
	public $primary_key='Post_id';

	public function getAll()
	{
		 $sql = "SELECT * FROM `{$this->table}`";
		 return db_get_all($sql);
	}
	public function TOPID()
	{
		 $sql = "SELECT * FROM `posts` ORDER BY `post_id` desc Limit 1";
		  $rows = db_get_all($sql);
        return isset($rows[0]) ? $rows[0] : 1;

	}
	public function getByTag ($value ,$field = null)
	{
		 if ($field === null) {
            $field = $this->primary_key;
        }
         $sql = "SELECT * FROM `{$this->table}` WHERE `{$field}` Like '%" . esc($value)."%'";
         
         $rows = db_get_all($sql);      

        return isset($rows) ? $rows : false;

	}
	public function getBy($value, $field = null) 
	 {
        if ($field === null) {
            $field = $this->primary_key;
        }
        $sql = "SELECT `posts`.Content as 'content_post',`posts`.`Tag`,`posts`.`title`, `comments`.* FROM `{$this->table}`,`comments` WHERE `{$this->table}`.`{$field}` = " . esc($value) . " and `{$this->table}`.`{$field}`= `comments`.`post_id`";
 
        $rows = db_get_all($sql);
        
        return isset($rows) ? $rows : false;
    }
	 public function add($postData)
	 {
	 	return db_insert($this->table, $postData);
	 }
	 public function update($postData,$key)
	 {
	 	$where ="Post_id=".$key;

	 	return db_update($this->table, $postData,$where);
	 }
	  public function delete ($key)
    {
        $where =$this->primary_key."=".$key;
        return db_delete($this->table,$where);

    }
	
}
?>