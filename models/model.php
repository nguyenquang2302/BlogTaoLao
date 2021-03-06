<?php
class Model {
    public $table = '';
    public $primary_key = '';
    
    public function all() {
        $sql = "SELECT * FROM `{$this->table}`";
        
        return db_get_all($sql);
    }
    
    public function delete ($key)
    {
        $where = "`".$this->primary_key."` =".$key;
        return db_delete($this->table,$where);

    }
    //
    public function getOneBy($value, $field = null) {
        if ($field === null) {
            $field = $this->primary_key;
        }
        
        $sql = "SELECT * FROM `{$this->table}` WHERE `{$field}` = '" . esc($value) . "' LIMIT 1";
        $rows = db_get_all($sql);      
        return isset($rows) ? $rows : false;
    }
    
    public function paginate($page, $per_page = 20, $where = '') {
        $page = abs(int($page)) - 1;
        $skip = ($page - 1) * $per_page;     
        $sql = "SELECT * FROM `{$this->table}` {$where} LIMIT {$per_page} OFFSET {$skip}";
        
        return db_get_all($sql);
    }
    public function check_true($value,$field=null)
    {
         if ($field === null) {
            $field = $this->primary_key;
        }
         $sql = "SELECT * FROM `{$this->table}` WHERE `{$field}` = '" . esc($value) . "' LIMIT 1";
         $rows = db_get_all($sql);
        return isset($rows[0]) ? true : false;
    }
    

}
