<?php

class User extends Model {
    public $table = 'users';
    public $primary_key = 'id';
    
    public function authLogin($postData) 
    {
        if(!empty($postData))
        {
            $user = static::getOneBy($postData['email'], 'email');
            if(empty($user))
                return false;
            if ($user[0] && $user[0]['password'] == md5($postData['password'])) 
            {
                unset($user[0]['password']);
                $_SESSION['logged'] = $user[0];
                return $user[0];
            }
            return false;
        }
    }

    
    public function authLogout() {
        unset($_SESSION['logged']);
        session_destroy();
    }
}
